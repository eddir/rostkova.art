<script>
    window.onload = function () {
      CKEDITOR.replace('body', {customConfig: '/adminlte/js/ckeditor.js'})
      
      $('.popup_selector').click( function (event) {
        event.preventDefault()
        var updateID = $(this).attr('data-inputid')
        var elfinderUrl = '/elfinder/popup/'
        var triggerUrl = elfinderUrl + updateID
        $.colorbox({
          href: triggerUrl,
          fastIframe: true,
          iframe: true,
          width: '70%',
          height: '70%'
        })
      });
    }
</script>