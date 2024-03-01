<table style="font-size: 20;width:50%;border-collapse: collapse;">

    <form action="" method="post">

        <tr>
            <td>
                Receiver :
            </td>
            <td colspan="3">
                <input type="email" name="receiver" style="width:100%">
            </td>
        </tr>
        <tr>
            <td>
                Header :
            </td>
            <td colspan="3">
                <input type="text" name="header" style="width:100%">
            </td>
        </tr>
        <tr>
            <td>
                Context :
            </td>
            <td colspan="2">
                <input type="text" name="context" style="width:100%;padding: 32px 16px;">
            </td>
            <td><button style="width:100%;padding: 32px 12px;background-color: #f44336;">SEND</button></td>
        </tr>

    </form>

</table>

<?php 

    $send_message = mail($_POST['receiver'],$_POST['header'],$_POST['context']);
    if($send_message){
        echo "<script>";
            echo 'alert(Message was sent successfully.")';
        echo "</script>";
    }else{
        echo "<script>";
            echo 'alert(Message couldn\'t has sent")';
        echo "</script>";
    }

?>