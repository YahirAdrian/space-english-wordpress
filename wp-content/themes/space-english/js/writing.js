const textarea = document.querySelector('.writing-area')
const wordCount = document.querySelector('.word-count')
const copyButton = document.querySelector('.copy-button')

if(textarea !== undefined && wordCount!== undefined){
    textarea.addEventListener('input', updateWordCount)
}

if(textarea !== undefined && copyButton !== undefined){
    copyButton.addEventListener('click', copyText)
}

function updateWordCount(){
    const text = textarea.value;
    var words = text.split(/\s+/).filter(function(word) {
        return word.length > 0;
    });
    wordCount.textContent= words.length + '/50 words'

    
    if(words.length >=40 && words.length <=60){
        wordCount.style.color="green"
    }else if(words.length > 60){
        wordCount.style.color="red";
    }else{
        wordCount.style.color="black";

    }
}

function copyText(){
    textarea.select();
    var textToCopy = textarea.value;

    /* Copy the text to the clipboard */
    document.execCommand('copy');

    /* Alert the user or perform any other desired action */
    alert('Text copied to clipboard, you can paste it in the padlet below!');
}