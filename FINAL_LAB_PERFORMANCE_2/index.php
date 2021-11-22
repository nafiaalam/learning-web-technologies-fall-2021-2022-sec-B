<html>
    <head>
        <title>Ajax Calculator</title>
        <style>
            .calculator-grid {
                display: grid;
                justify-content: center;
                align-content: center;
                min-height: 100vh;
                grid-template-columns: repeat(4, 100px);
                grid-template-rows: minmax(120px, auto) repeat(5, 100px);
                }

            .calculator-grid > button {
              cursor: pointer;
              font-size: 2rem;
              border: 1px, solid #FFFFFF;
              outline: none;
              background-color: rbga(255, 255, 255, 0.75);
            }

              .calculator-grid > button:hover {
                background-color: #a9a9a9;
              }

              .span-two {
                grid-column: span 2;
                color: #adf802;
                background-color: rgba(139, 0, 139, 0.8);
              }

              .output{
                grid-column: 1 / -1;
                background-color: rgba(0, 0, 0, 0.75);
                display: flex;
                align-items: flex-end;
                justify-content: space-around;
                flex-direction: column;
                padding: 10px;
                word-wrap: break-word;
                word-break: break-all;
              }

              .output .previous-operand{
                color: rgba(255,255, 255, 0.75);
                font-size: 1.5rem;
              }

              .output .current-operand{
                color: white;
                font-size: 2.5rem;
              }
        </style>
        <script>
            $(document).ready(function(){
                //general
                $('input[type=button]').click(function(){
                    var num = $(this).val();
                    var old = $('#display').html();
                    //this will clear the screen
                    if( num === 'C' ){
                        $('#display').html('');
                        return;
                    }
                    if( num === '=' ){
                        $('#display').html(old);
                        return;
                    }
                    //var str = $('#display').val()+num;
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'operation','num':num,'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
                //equal button click
                $('#eql').click(function(){
                    var num = $('#display').html();
                    var old = $('#display').html();
                    $.ajax({
                            url:'ajax.php',
                            type: "POST",
                            data:{'action':'equal', 'num':num, 'old':old},
                            success: function(msg){
                                $('#display').html(msg);
                            }
                        }).error(function(){
                            $('#display').html('Oops! An error occured');}
                           );
                });
            });
        </script>
    </head>
    
</html>