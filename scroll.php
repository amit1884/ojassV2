<link rel="stylesheet" href="scroll_icon/scroll.css">
<a href="#" class="scroll_btn" ><span class="arrow">up</span></a>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="scroll_icon/scroll.js"></script>
<script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/15979/footer-inject.jss"></script>
<script>
window.onscroll = function()
{
    if(pageOffset >= 1000)
    {
        document.getElementById('scroll_btn').style.visibility="visible"
    }else
    {
        document.getElementById('scroll_btn').style.visibility="hidden";
    }
};
</script>