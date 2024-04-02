<div class="whole-page-overlay" id="whole_page_loader">
    <img class="center-loader" style="height:100px;" src="{{asset('public/images/loader.gif')}}" />
</div>
<style>
    .whole-page-overlay {
        left: 0;
        right: 0;
        top: 0;
        bottom: 0;
        position: fixed;
        background: rgba(0, 0, 0, 0.6);
        width: 100%;
        height: 100% !important;
        z-index: 1050;
        display: none;
    }

    .whole-page-overlay .center-loader {
        top: 50%;
        left: 52%;
        position: absolute;
        color: white;
    }
</style>