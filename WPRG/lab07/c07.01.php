<?php
function calc($a, $b, $operator)
{
    switch($operator)
    {
        case '+':
            return $a + $b;
            break;

        case '-':
            return $a - $b;
            break;

        case '*':
            return $a * $b;
            break;

        case '/':
            return $a / $b;
            break;

        default:
            return "Sorry No command found";
    }
}
if(isset($_POST['submit']))
{
    $result = calc($_POST['n1'],$_POST['n2'],$_POST['op']);
}
?>

<form method="post">
    <table>
        <tr>
            <td><strong><?php echo $result; ?><strong></td>
        </tr>
        <tr>
            <td>1st Number</td>
            <td><input type="text" name="n1"></td>
        </tr>

        <tr>
            <td>2nd Number</td>
            <td><input type="text" name="n2"></td>
        </tr>

        <tr>
            <td>Select Operator</td>
            <td><select name="op">
                    <option value="+">+</option>
                    <option value="-">-</option>
                    <option value="*">*</option>
                    <option value="/">/</option>
                </select></td>
        </tr>

        <tr>
            <td></td>
            <td><input type="submit" name="submit" value=" = "></td>
        </tr>

    </table>
</form