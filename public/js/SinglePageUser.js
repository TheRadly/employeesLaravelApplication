$(document).ready(function () {

    let FirstName = $('#firstName')[0];
    let LastName = $('#lastName')[0];
    let SurName = $('#surName')[0];
    let ChiefID = $('#chiefID')[0];
    let EmploymentDate = $('#adoptionDate')[0];
    let Salary = $('#salary')[0];
    let EditButton = $('#editEmployee')[0];
    //let Delete = $('#Delete')[0];
    let FileInput = $('#inputFile')[0];
    let Chief = $('#chief')[0];
    let Position = $('#postValue')[0];

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

                            Chief.value = '';

                        } // If

                    } // Else



                }).fail(function () {

                    if(Chief){

                        Chief.value = '';

                    } // If

                }); // Ajax

        }); // Chief AddEventListener

    } // If

    // if(Delete){
    //
    //     Delete.addEventListener('click', function (event) {
    //
    //         if(!confirm('Are you sure you want to delete an employee?')){
    //
    //             event.preventDefault();
    //
    //         }//if
    //
    //     });
    //
    // }//if

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