<template>
  <aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 fixed-start  sec-bg-color" id="sidenav-main">
    <div class="sidenav-header glass-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
        <img src="/Theme/ui/images/Uploader.png" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">File Uploader</span>
    </div>
    <hr class="horizontal dark mt-0">
    <!--START  Packages/Modules/ Menu -->
      <main_menu></main_menu>
    <!--END  Packages/Modules/ Menu -->
    <hr class="horizontal dark mt-0">
    <div class="sidenav-footer mx-3 glass-content">
      <div class="card card-background shadow-none card-background-mask-secondary" id="sidenavCard">
        <div class="full-background" style="background-image: url('/theme/assets/img/curved-images/white-curved.jpeg')"></div>
        <div class="card-body text-start p-3 w-100">
          <div class="icon icon-shape icon-sm bg-white shadow text-center mb-3 d-flex align-items-center justify-content-center border-radius-md">
            <i class="ni ni-diamond text-dark text-gradient text-lg top-0" aria-hidden="true" id="sidenavCardIcon"></i>
          </div>
          <div class="docs-info">
            <h6 class="text-white up mb-0">Need help?</h6>
            <p class="text-xs font-weight-bold">Please check our docs</p>
            <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/soft-ui-dashboard" target="_blank" class="btn btn-white btn-sm w-100 mb-0">Documentation</a>
          </div>
        </div>
      </div>
    </div>
  </aside>
</template>

<script>
    import { defineComponent } from 'vue'

    import { Head, Link } from '@inertiajs/inertia-vue3';

    import main_menu from './menus/main-menu.vue'

    export default defineComponent({
        components: {
          Link,
          main_menu
        },

        mounted()
        {

        },
    })
</script>

<style scoped>
.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}

hr {
    border: none !important;
    height: 3px !important;
    color: black !important; /* old IE */
    background-color: black !important; /* Modern Browsers */
}

</style>
