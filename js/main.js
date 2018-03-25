<script>
$(function() {
  $('textarea#froala-editor').froalaEditor()
});
</script

CKEDITOR.replace( 'editor1', {
  fullPage: true,
  extraPlugins: 'docprops',
  // Disable content filtering because if you use full page mode, you probably
  // want to  freely enter any HTML content in source mode without any limitations.
  allowedContent: true,
  height: 320
} );
</script>
