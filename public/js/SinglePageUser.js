$(document).ready(function () {

    let FirstName = $('#firstName')[0];
    let LastName = $('#lastName')[0];
    let SurName = $('#surName')[0];
    let ChiefID = $('#chiefID')[0];
    let EmploymentDate = $('#adoptionDate')[0];
    let Salary = $('#salary')[0];
    let EditButton = $('#editEmployee')[0];
    let Delete = $('#deleteEmployee')[0];
    let FileInput = $('#inputFile')[0];
    let Chief = $('#chief')[0];
    let Position = $('#postValue')[0];
    let Update = $('#submit')[0];

    let ChiefInfo = $('#chiefInfo')[0];
    let LabelChiefID = $('#labelChiefID')[0];
    let ChiefInputID = $('#chiefInputID')[0];
    let ChiefNone = $('#chiefNone')[0];

    if(ChiefID){

        ChiefID.addEventListener('input', function (event) {

            $.ajax({
                contentType: 'application/json',
                dataType: 'json',
                url: `/api/get-new-chief/${event.srcElement.value}`,
                type: 'POST'
            }).done(function (data) {

                if(data.id){

                    if(Chief){

                        Chief.value = `${data.lastName} ${data.firstName} ${data.surName}`;

                    } // If

                } // If
                else {

                    if(Chief){

                        Chief.value = 'Chief not found..';
                        ChiefID.value = '';

                    } // If

                } // Else

            }).fail(function () {

                if(Chief){

                    Chief.value = 'Chief not found..';
                    ChiefID.value = '';

                } // If

            }); // Ajax

        }); // Chief AddEventListener

    } // If

    if(Update){

        Update.addEventListener('click', function (event) {

            if(!confirm('Вы уверены что хотите обновить сотрудника?')){

                event.preventDefault();

            } // If

        }); // Update Click

    } // If

    if(Position){

        let selectedIndex = $("#postValue option:selected").val();

        if(selectedIndex === '1'){

            ChiefInfo.hidden = true;
            LabelChiefID.hidden = true;
            ChiefInputID.hidden = true;


        } // If
        else{
            ChiefNone.hidden = true;
        }

        Position.addEventListener('change',function (event) {

            console.dir(ChiefNone);
            if(event.srcElement.value !== '1'){

                ChiefNone.hidden = true;
                ChiefInfo.hidden = false;
                LabelChiefID.hidden = false;
                ChiefInputID.hidden = false;

            } // If
            else{

                ChiefNone.hidden = false;
                ChiefInfo.hidden = true;
                LabelChiefID.hidden = true;
                ChiefInputID.hidden = true;

            } // Else

        }); // Event

    } // If

    if(Delete){

        Delete.addEventListener('click', function (event) {

            if(!confirm('Вы уверены что хотите удалить сотрудника?')){

                event.preventDefault();

            } // If

        }); // Event

    } // If

    if(EditButton){

        EditButton.addEventListener('click', function () {

            if(FirstName){

                FirstName.disabled = !FirstName.disabled;

            } // If

            if(LastName){

                LastName.disabled = !LastName.disabled;

            } // If

            if(SurName){

                SurName.disabled = !SurName.disabled;

            } // If

            if(ChiefID){

                ChiefID.disabled = !ChiefID.disabled;

            } // If

            if(EmploymentDate){

                EmploymentDate.disabled = !EmploymentDate.disabled;

            } // If

            if(Salary){

                Salary.disabled = !Salary.disabled;

            } // If

            if(Position){
                Position.disabled = !Position.disabled;
            } // If

            if(FileInput){

                FileInput.hidden = !FileInput.hidden;

            } // If

            if(Update){
                Update.disabled = !Update.disabled;
            } // If

        }); // EditButton AddEventListener

    } // If

    let employeeImage = $('#validatedCustomFile')[0];
    let employeeImageLabel = $('#imageLabel')[0];

    if(employeeImage){

        employeeImage.addEventListener('change', function (event) {

            if(employeeImageLabel){

                let filePath = event.srcElement.value;
                let fileName = filePath.replace(/^.*[\\\/]/, '');

                employeeImageLabel.innerHTML = fileName;

            } // If

        }); // EmployeeImage AddEventListener

    } // If

}); // Document Ready
