/**
 * Created by JIAKUI on 2016/6/24.
 */
$(function()
{   /*$(':submit').click(function()
{
    alert(3)})
    $.validator.addMethod('number',function(value){
        if(parseInt(value)==value)
        {
            return true;
        }

    },'请输入数字');*/
    $('form').validate({
        rules:{
            username:{
                required:true,
                maxlength:7,
                minlength:3,
                max:7,

            },//用逗号将不同的name隔开
            mima:{
                required:true,
                maxlength:7,
                minlength:3,
                number:true
            }
        },
        messages:{
            username:{
                required:'请,这个可一定要填哦！',
                maxlength:'不要太多，少于7个亲！',
                minlength:'多敲几个字符吧，要三个哦！',
                /*max:'省省吧，打那么多字，要少于7个咯',*/
            }


        }

    });
})