const transcriptButtons = document.querySelectorAll('.transcript-button')

if(transcriptButtons.length >0){
    transcriptButtons.forEach(button => {
        const transcriptContent = document.querySelector('.transcript-content')
        
        button.addEventListener('click', ()=> showTranscript(button, transcriptContent))
        
    })
}

function showTranscript(button, content){
    if(content.style.display=='none'){
        button.textContent="Hide transcript"
        content.style.display ="block"
    }else{
        button.textContent="Show transcript"
        content.style.display ="none"
    }
}