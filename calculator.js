var operator;
var operand=0;
var temp=0;
var flag=0;
$(document).ready(function() {
    $('.b1').click(function() {
        val = Number($(this).val());
        operand=operand*10+val;
       $('#dis').val(operand);
    });

    $('.b2').click(function(){
        if(flag==0) {
        operator=$(this).val();
        temp=$('#dis').val();  
        flag+=1;
        $('#dis').val('');
        operand=0; 
        }
        
        else{
        value=$('#dis').val();
        $.ajax({
        url: 'calculate.php',
        type: 'POST',
        data: {
            OPR1:temp,
            OPR2:value,
            OPT:operator
        },
        success: function(data) {
            temp=data;
           $('#dis').val(data);
           value=0;
           operand=0; 
        }
        });    
        }
        operator=$(this).val();
    });
});
      