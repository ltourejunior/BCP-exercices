<?php
require_once 'lib/data-functions.php';

if(!empty($_POST)){
        $data_to_save =array(
                'name'=>isset($_POST['name']) ? $_POST['name'] : null,
                'plot'=>$_POST['plot'],
                'in_production'=>$_POST['in_production'],
                'genre'=>$_POST['genre'],
                'type'=>$_POST['type'],
                );
        }
function field_value($post_name, $default_value=null){
        $value=isset($_POST[$post_name]) ? $_POST[$post_name] : $default_value;
        return htmlspecialchars();
}
?>
<form enctype="" action="" method="post">
Movie title:<br/>
<input type="text" name="text" value="<?php echo field_value('name', ''); ?>"><br/>
<br>
Plot:<br/>
<textarea name="plot" value="<?php echo field_value('plot', ''); ?>"></textarea><br/>
<br/>
In production: <br/>
<input type="hidden" name="in_production" value="0">
<input type="checkbox" name="in_production" value="1"<?php echo isset($_POST['in_production']) && $_POST['in_production']==1 ? 'checked' : '';?>><br/>
<br/>
<select name="genre">
        <option value="">---</option>
        <option value="action">action</option>
        <option value="adventure">adventure</option>
        <option value="scifi">scifi</option>
</select>
<br/>
Type: <br/>
<label for="type_feature_radio">Feature film:
<input type="radio" name="type" value="feature" id="type_feature_radio">
</label>
<label for="type_feature_radio">TV show:
<input type="radio" name="type" value="tv-show" id="type_feature_radio">
<br>
<input type="submit" name="" value="save">


    
</form>