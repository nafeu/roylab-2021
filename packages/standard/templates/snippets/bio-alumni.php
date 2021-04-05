<?php defined('AUTOMAD') or die('Direct access not permitted!'); ?>

<script type="text/javascript">
  $(document).ready(() => {
    $('.content').find('img').css({ maxWidth: '160px' });
    $('figcaption').css({ fontWeight: 'bold' });
    $('figcaption').parent().css({
      marginBottom: '0.5em',
      display: 'inline-block',
      width: '45%'
    });
    $('figcaption').parent().next().css({ marginTop: '0.5em' });
    $.each($('figcaption').parent().next(), function(index, element) {
      const prev = $(element).prev();
      const detachedElement = $(element).detach();
      prev.append(detachedElement);
    });
  });
</script>