<?php echo form_open('billing/god_report/');

function select($var, $name, $value)
{
    $string = "<select name={$name}_id>";
    foreach ($var->result() as $v) {
        $string .= "<option value={$v->id} " . ($v->id == $value ? " selected " : "") . " >{$v->name}</option>";
    }
    $string .= "</select><br>";
    echo $string;
}

?>
��������� ������ : <?php select($period, 'start_period', $current_period); ?> <br>
�������� ������ : <?php select($period, 'finish_period', $current_period); ?> <br>
<br>
<input type=submit value='������ �����'>

</form>