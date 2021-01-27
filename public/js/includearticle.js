generateButton=document.querySelector("button");
mainArticlePanel=document.querySelector("section.project-form");
mainPanel=document.querySelector('div.mainPanel');



function generateGridElements(){
    numberOfSlides=document.querySelector("input[type='number']").value;
    if(numberOfSlides==0){
        numberOfSlides=1;
        document.querySelector("input[type='number']").setAttribute('value','1');
    }
    removeElementsByClass("slidePanel");
    removeElementsByClass("formClass");
    for(i=0;i<numberOfSlides;i++){
        panel=document.createElement('div');
        panel.className="slidePanel";
        title=document.createElement('input');
        title.name="title[]";
        title.type="text";
        title.placeholder="title";
        title.form="myForm";
        description=document.createElement('textarea');
        description.name="description[]";
        description.rows=15;
        description.placeholder="description";
        description.form="myForm";
        input=document.createElement('input');
        input.type="file";
        input.name="file[]";
        input.form="myForm";
        panel.appendChild(title);
        panel.appendChild(description);
        panel.appendChild(input);
        mainPanel.appendChild(panel);
    }
    confirmForm=document.createElement('form');
    confirmForm.id="myForm";
    confirmForm.className="formClass";
    confirmForm.action="addArticle"
    confirmForm.method="POST";
    confirmForm.enctype="multipart/form-data";
    confirmButton=document.createElement('button');
    confirmButton.type="submit";
    confirmButton.innerHTML="Confirm";
    confirmForm.appendChild(confirmButton);
    mainPanel.appendChild(confirmForm);
    giveAllForm();

}

function giveAllForm(){
    allInputsTitles=document.querySelectorAll("input[type='text']");
    allInputsAreas=document.querySelectorAll("textarea");
    allInputsFiles=document.querySelectorAll("input[type='file']");
    for(let i=0;i<allInputsAreas.length;i++){
        allInputsTitles[i].setAttribute("form","myForm")
        allInputsAreas[i].setAttribute("form","myForm")
        allInputsFiles[i].setAttribute("form","myForm")
    }

}

function removeElementsByClass(className){
    elements = document.getElementsByClassName(className);
    while(elements.length > 0){
        elements[0].parentNode.removeChild(elements[0]);
    }
}

generateButton.addEventListener("click",generateGridElements);