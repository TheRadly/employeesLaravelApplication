
let SortSelect = $('#formSelectSortName')[0];
let DataInput = $('#dataInput')[0];
let SortTypeSelect = $('#formSelectSortType')[0];
let SearchSelect = $('#formSelectSearch')[0];
let Table = $('#table')[0];
let ButtonHideSort = $('#arrowDiv')[0];
let MoreList = $('#moreList')[0];

// Лимит списков на одной странице
let Limit = 50;

// Смещение
let Offset = 0;

// Сортировка по 'id' и т.д
let Sort = 'id';

// Сортировка по возрастанию/убыванию
let SortType = 'Asc';

// Поиск по 'id' и т.д
let Search = 'id';

// Данные поиска
let SearchData = '';

// Массив сотрудников
let listArray = [];


if(SearchSelect){

    Search = SearchSelect[0].value ? SearchSelect[0].value: Search;

    SearchSelect.addEventListener('change', function (event) {

        Search = event.srcElement.value;

        if(DataInput){

            SearchData = DataInput.value = '';

        } // If - Если введено значение в поле поиска

        Offset = 0;

        GetListEmployeers();

    }); // SearchSelect

} // If - Если выбран селектор полей для поиска

if(DataInput){

    SearchData = DataInput.value ? DataInput.value : SearchData;

    DataInput.addEventListener('input', function (event) {

        SearchData = event.srcElement.value;
        Offset = 0;

        GetListEmployeers();

    }); // Event

}//if - Если введено значение в поле

if(SortTypeSelect){

    SortType = SortTypeSelect.value ? SortTypeSelect.value: SortType;

    SortTypeSelect.addEventListener('change', function (event) {

        SortType = event.srcElement.value;
        Offset = 0;

        GetListEmployeers();

    }); // Event

} // If - Если выбран селектор выбора типа сортировки

if(SortSelect){

    Sort = SortSelect.value ? SortSelect.value: Sort;

    SortSelect.addEventListener('change', function (event) {

        Sort = event.srcElement.value;
        Offset = 0;

        GetListEmployeers();

    }); // Event

} // If - Если выбран тип поля, по которому сортировка

function GetListEmployeers() {

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

                ClearTable(Table);

                if(data.length < 50 || data.length === 0){

                    MoreList.hidden = 'hidden';

                } // If - Если список меньше 50-ти человек, кнопка "Добавить еще" отключается
                else {

                    MoreList.hidden = '';

                } // Else - Иначе включается обратно

                if(data && data.length > 0){

                    listArray = data;

                    let htmlTable = '';

                    data.forEach(employee => {

                        htmlTable += `<tr style="cursor: pointer;" class="singleStroke" data-id="${employee.id}">
                                        <th scope="row"><p>${employee.id}</p></th>
                                        <td><img class="rounded-circle" style="object-fit: cover; width: 50px; height: 50px" src="${employee.imageProfile ? `/img/emp/${employee.imageProfile}` : 'https://pbs.twimg.com/profile_images/824716853989744640/8Fcd0bji_400x400.jpg'}"></td>
                                        <td>${employee.firstName}</td>
                                        <td>${employee.lastName}</td>
                                        <td>${employee.surName}</td>
                                        <td>${employee.postValue}</td>
                                        <td>${employee.adoptionDate}</td>
                                        <td>${employee.salary}</td>
                                      </tr>`;

                    }); // ForEach

                    Table.innerHTML = htmlTable;

                    $(document).ready(function(){

                        $(".singleStroke").click(function(event){

                            console.log(event.currentTarget.dataset.id);

                            document.location.href = `/single-page/${event.currentTarget.dataset.id}`

                        }); // Click

                    }); // Document Ready - Анимация разворачивания/сворачивания полей

                } // If
                else {
                    employeeList = [];
                } // Else

            } // If

        }).fail(function () {

            if(Table){

                clearChild(Table);
                employeeList = [];

            } // If

        }); // Fail

} // GetListEmployeers - Получение списка сотрудников

function ClearTable(elem){

    while (elem.firstChild) {

        elem.removeChild(elem.firstChild);

    } // While

} // ClearTable - Очистка таблицы

$(document).ready(function(){

    $("#hidderDiv").click(function(){

        $("#hiddenElementsSeacrhing").slideToggle("slow");

        ButtonHideSort.innerHTML == 'Развернуть поля поиска' ?
            ButtonHideSort.innerHTML = 'Свернуть поля поиска':
            ButtonHideSort.innerHTML = 'Развернуть поля поиска';

        return false;

    }); // Обработка клика для вывода полей сортировки

    MoreList.addEventListener('click', function () {

        Limit += 50;
        GetListEmployeers();

    }); // Обработка клика пагинации
    
}); // Document Ready

GetListEmployeers();