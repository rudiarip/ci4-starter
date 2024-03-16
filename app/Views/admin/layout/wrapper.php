<!-- <= $this->extend('admin/layout/header') ?>
<= $this->extend('admin/layout/navigasi') ?>

<php if (isset($isi)) {
    $this->extend($isi);
}
?>

<= $this->extend('admin/layout/footer') ?> -->

<?= $this->renderSection('header') ?>
<?= $this->renderSection('navigasi') ?>

<?= $this->renderSection('footer') ?>