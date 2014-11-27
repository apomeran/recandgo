{literal}
    <script src="{/literal}{$content_dir}modules/fblogin/js/fblogin.js{literal}"></script>
    <script>
        var fblogin_appid='{/literal}{$fbl_appid}{literal}';
    </script>
    <link href="{/literal}{$content_dir}modules/fblogin/css/fblogin.css{literal}" rel="stylesheet" type="text/css" />
{/literal}
<div class="loginpopupsocial">
    <div class="fblogin"><p onclick="fblogin_mypresta();"><span>{l s='Log in with facebook' mod='fblogin'}</span></p></div>
</div>