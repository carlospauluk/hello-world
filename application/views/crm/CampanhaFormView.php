<h2><?php echo $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('crm/campanha/create'); ?>

    <label for="descricao">Descrição</label>
    <input type="input" name="descricao" /><br />

    <label for="dt_inicio">Dt Início</label>
    <textarea name="dt_inicio"></textarea><br />

    <input type="submit" name="submit" value="Salvar" />

</form>