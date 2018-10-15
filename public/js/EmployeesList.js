

function GetListEmployeers() {

    // let SortSelect = $('#SortSelect')[0];
    // let LimitSelect = $('#LimitSelect')[0];
    // let DataInput = $('#DataInput')[0];
    // let SortTypeSelect = $('#SortTypeSelect')[0];
    // let SearchSelect = $('#SearchSelect')[0];
    // let NextButton = $('#NextButton')[0];
    // let PrevButton = $('#PrevButton')[0];
    let Table = $('#table')[0];

    let Limit = 10;
    let Offset = 0;
    let Sort = 'id';
    let SortType = 'Asc';
    let Search = 'id';
    let SearchData = '';

    let listArray = [];

        $.ajax({

            contentType: 'application/json',
            dataType: 'json',
            data: JSON.stringify({
                offset: Offset,
                limit: Limit,
                orderBy: Sort,
                sort: SortType,
                search: Search,
                searchValue: SearchData,
            }),
            url: `/api/get-list-employeers`,
            type: 'POST'
        }).done(function (data) {

            if(Table){

                clearTable(Table);

                if(data && data.length > 0){

                    listArray = data;

                    let htmlTable = '';

                    console.log(data);

                    data.forEach(employee => {

                        htmlTable += `<tr>
                                        <th scope="row"><a href="/single-employee/${employee.id}">${employee.id}</a></th>
                                        <td>${employee.firstName}</td>
                                        <td>${employee.lastName}</td>
                                        <td>${employee.surName}</td>
                                        <td>${employee.postValue}</td>
                                        <td>${employee.adoptionDate}</td>
                                        <td>${employee.salary}</td>
                                      </tr>`;

                    });

                    Table.innerHTML = htmlTable;

                }//if
                else {

                    employeeList = [];

                }//else

            }//if

        }).fail(function () {

            if(Table){

                clearChild(Table);
                employeeList = [];

            }//if

        });


}//getEmployeeList

function clearTable(elem){

    while (elem.firstChild) {

        elem.removeChild(elem.firstChild);

    }//while

}//clearChild

GetListEmployeers();