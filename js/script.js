let checkbox=document.querySelectorAll(".checkbox");
checkbox.forEach(function(value){



value.addEventListener("change",function(event){
    let taskname=event.target.nextElementSibling;
    let parent=event.target.parentElement;
    let deletebtn=parent.querySelector(".deletebtn");
    let updatebtn=parent.querySelector(".updatebtn");
    if(event.target.checked){
        taskname.style.textDecoration="line-through";
         deletebtn.style.display = "none";
            updatebtn.style.display = "none";

     }
        else{

            taskname.style.textDecoration = "none";

            deletebtn.style.display = "block";
            updatebtn.style.display = "block";



    }



});
});