let checkbox=document.querySelectorAll(".checkbox");
checkbox.forEach(function(value){



value.addEventListener("change",function(event){
    event.target.form.submit();
});
});

let deleteaccountbtn=document.querySelector("#deleteaccountbtn");
deleteaccountbtn.addEventListener("click",function(event){
    event.preventDefault();
    let decision=confirm("Are you sure of deleting this account permanently?");
    if(decision){
        event.target.form.submit();
        
    }


});