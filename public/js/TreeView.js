
let ajaxReq = new shield.RecursiveDataSource({

    remote: {

        read: function (params, success, error, currentNode) {

            if (currentNode) {

                $.ajax({

                    url: `/api/get-employeers/${currentNode.parent.id}`,
                    type: 'GET',

                }).done(function (data) {

                    if( data && data.length > 0 ){

                        nodes = [];

                        data.forEach(item => {

                            nodes.push({

                                text: `${item.firstName} ${item.lastName} ${item.surName} (${item.postValue})`,
                                id: item.id,
                                hasChildren: item.countEmployees > 0,
                                items: ajaxReq

                            });

                            console.log(item);

                        }); // Data

                        success(nodes, false, currentNode);

                    } // If
                    else {
                        success([], false, currentNode);
                    } // Else

                    success(data, false, currentNode);

                }).fail(function () {
                    success([], false, currentNode);
                });

            } // If

        } // Read

    } // Remote

}); // AjaxReq

let data =  [{
    text: "TreeEmployeers", id: 0, hasChildren: true, items: ajaxReq
}]; // Data

$("#treeview").shieldTreeView({
    dataSource: data
}); // ShieldTreeView