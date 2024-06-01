function focusInput(){
    let input = document.getElementById("ema")
   

    if(input.value != ''){
        input.style.boxShadow = "0px 0px 10px white"
        input.style.border = "5px solid white"
       
    }
    else{
        input.style.boxShadow = "0px 0px 0px white"
        input.style.border = "1px solid white"
       
    }
}



function focusPas(){
    let pass =  document.getElementById("pas")

    if(pass.value != ''){
        pass.style.boxShadow = "0px 0px 10px white"
        pass.style.border = "5px solid white"
    }
    else{
        pass.style.boxShadow = "0px 0px 0px white"
        pass.style.border = "1px solid white"
    }
    }

    function ValidForms(){
        let name = document.getElementById("name")
        let desc = document.getElementById("desc")
        let type = document.getElementById("sel")
        let error = false

        if(name === '' || desc === '' || type === ''){
            error = true
        }

        if(error === true){
            $('#errorModal').modal('show')
        }
        else{
            document.getElementById("problemForm").submit();
        }
    }