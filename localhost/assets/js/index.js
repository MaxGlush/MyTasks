//change color button
const delay = () => new Promise(r => setTimeout(r, 1000));

async function changeColor(){
    $i = 0;
    $name = $('.name');
    $color = ['red', 'green', 'pink', 'black'];
    while (true) {
        $varColor = $color[$i];
        $name.css({
            'color':$varColor,
            'font-size':'30px'
        });
        await delay();
        if($i++ > 2) {
            $i = 0;
        } 
    }
}

function reset() {
    document.location.reload();
}



//$button = $('button');
/*///const inputANode = document.querySelector('.input_a') ;
//const inputBNode = document.querySelector('.input_b') ;
//const selectOperationNode = document.querySelector('.select_mark')
//const btnResultnode = document.querySelector('.btn_result') ;
//const output = document.querySelector('.output') ;*/

const OPERATIONS = {
    sum: '+',
    substract: '-',
    multiply: '*',
    division: '/'
};


function calculate( a, b, operation ) {
    // console.log(a, b, operation);
    
    switch (operation) {
        case OPERATIONS.sum:
            return sum(a, b);
            break;
        case OPERATIONS.substract:
            return substract(a, b);
            break;
        case OPERATIONS.multiply:
            return multiply(a, b);
            break;
        case OPERATIONS.division:
            return division(a, b);
            break;
        default:
            break;
    }
}




$output = $('.output');
$btnResultnode = $('.btn_result');

$btnResultnode.on('click', function(){
    $a = Number($('.input_a').val());
    $b = Number($('.input_b').val());
    $operation = $('.select_mark').val();
    $result = calculate($a, $b, $operation);
    $output.text($result);
});


$(document).ready(function(){
    $form = $("#authorization");
    $form.on('submit', function(e){
        e.preventDefault();
        $.ajax({
            url: "registration.php",
            method: $form.attr("method"),
            data: $(this).serialize(),
            success: function(response){
                $data_array = $.parseJSON(response); 

                if($data_array == 'error') {
                    $text = "Incorrect data! Change value of field!";                    
                    $('.text-message').removeClass('text-message_success').addClass('text-message_error');
                } else {
                    $text = "Ok!";
                    $('.text-message').removeClass('text-message_error').addClass('text-message_success');
                }

                $('.text-message').text($text);

                // console.log($data_array);
                
            }
        });
    });
})




//запрос логина и пароля при входе на сайт
function inputText(){
    $loginOk = false;
    $userName = '';
    $passWord = '';
    $userName = prompt('Input login', '');
    $userName = $userName.toLowerCase();
    $passWord = prompt('Input your pass', '');
    $passWord = $passWord.toLowerCase();
    
        if($userName == 'root' && $passWord == 'root'){
            $loginOk = true;
        }else alert('Incorrect name or password')
            $loginOk = false;
}
