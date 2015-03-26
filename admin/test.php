<form action="#" method="post" class="orb-form" id="myForm">
  <fieldset>
    <section>
      <label class="label">Nom catégorie</label>
      <label class="input"> <i class="icon-append fa fa-question"></i>
        <input type="text" name="pc_nom" id="pc_nom" value="<?php echo value('pc_nom'); ?>">
        <b class="tooltip tooltip-top-right">Le nom d'un composant de produit ne peut pas faire moins de 2 caractères</b>
      </label>
    </section>
  </form>