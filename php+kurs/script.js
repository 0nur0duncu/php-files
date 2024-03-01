function showAlert() {

    const inputID_1 = "name";
    const inputID_2 = "surname";
    const formID = "myform";
    const length_inputID_1 = 3
    const length_inputID_2 = 3
    
    if(document.getElementById(inputID_1) || document.getElementById(inputID_2) || document.getElementById(formID)){
        const nameValue = document.getElementById(inputID_1).value.trim();
        const surnameValue = document.getElementById(inputID_2).value.trim();
        
        if (nameValue.length <length_inputID_1 || surnameValue.length < length_inputID_2) {
    
            if(nameValue.length == 0 || surnameValue.length == 0){
                if(nameValue.length == 0){
                    document.getElementById(formID).onsubmit = function(event) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Uyarı',
                            text: 'Lütfen ad alanını doldurun!',
                            showConfirmButton: false,
                            timer: 950
                        });
                        event.preventDefault();
                    }
                }else{
                    document.getElementById(formID).onsubmit = function(event) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Uyarı',
                            text: 'Lütfen soyad alanını doldurun!',
                            showConfirmButton: false,
                            timer: 950
                        });
                        event.preventDefault();
                    }
                }
            }else{
                if(nameValue.length <length_inputID_1){
                    document.getElementById(formID).onsubmit = function(event) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Uyarı',
                            text: 'Ad alanının uzunluğu 3 den küçük olamaz!',
                            showConfirmButton: false,
                            timer: 950
                        });
                        event.preventDefault();
                    }
                }else{
                    document.getElementById(formID).onsubmit = function(event) {
                        Swal.fire({
                            icon: 'error',
                            title: 'Uyarı',
                            text: 'Soyad alanının uzunluğu 3 den küçük olamaz!',
                            showConfirmButton: false,
                            timer: 950
                        });
                        event.preventDefault();
                    }
                }
            } 
        } else {
            document.getElementById(formID).onsubmit = function(event) {
                event.preventDefault();
                Swal.fire({
                icon: 'success',
                title: 'Yönlendiriliyor...',
                showConfirmButton: false,
                timer: 850
                });
                setTimeout(function () {
                    document.getElementById(formID).submit();
                }, 1000);     
            }
        }
    }else{
        if(!document.getElementById("name")){
            alert("name id si belirtilmemiş");
        }else if(!document.getElementById("surname")){
            alert("surname id si belirtilmemiş")
        }else if(!document.getElementById("myform")){
            alert("myform id si belirtilmemiş")
        }
        event.preventDefault();
    }
}