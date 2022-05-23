<template>
  <div class="container-fluid">
        <!--START Uploader & DropeZone-->
      <div class="row mt-4">
        <div class="col-xl-12 col-sm-12 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
            <div class="card-body p-3">
              <!--<uploader></uploader>-->
               <!--<uploader_advanced></uploader_advanced>-->
               <fileuploadcomponent></fileuploadcomponent>
               <!--<multi_upload></multi_upload>-->
               <!--<upload_progress></upload_progress>-->
            </div>
          </div>
        </div>
      </div>
      <!--END Uploader & DropeZone-->

      <!--Start files Storage Capacity-->
      <div class="row mt-4">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
              <div class="card-header sec-bg-color">Documents</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <docs_storage></docs_storage>
                </div>
              </div>
            </div>
            <div class="card-footer">
             <ul class="nav justify-content-center">
               <li class="nav-item">
                 <p class="nav-link" >Total Files: </p>
               </li>
               <li class="nav-item">
                 <p class="nav-link">100k</p>
               </li>
             </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
            <div class="card-header sec-bg-color">Audios</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <audio_storage></audio_storage>
                </div>
              </div>
            </div>
            <div class="card-footer">
             <ul class="nav justify-content-center">
               <li class="nav-item">
                 <p class="nav-link" >Total Files: </p>
               </li>
               <li class="nav-item">
                 <p class="nav-link">30k</p>
               </li>
             </ul>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
            <div class="card-header sec-bg-color">Videos</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <video_storage></video_storage>
                </div>
              </div>
            </div>
            <div class="card-footer">
             <ul class="nav justify-content-center">
               <li class="nav-item">
                 <p class="nav-link" >Total Files: </p>
               </li>
               <li class="nav-item">
                 <p class="nav-link">50k</p>
               </li>
             </ul>
            </div>
          </div>
        </div>
      </div>
      <!--End files Storage Capacity & server speed-->

      <!--Start files Storage Capacity-->
      <div class="row mt-4">
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color ">
              <div class="card-header sec-bg-color">Storage</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <storage></storage>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
              <div class="card-header sec-bg-color">Recycle Bin</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <recycle_bin_storage></recycle_bin_storage>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 col-sm-6 mb-xl-0 mb-4">
          <div class="card sec-bg-color">
              <div class="card-header sec-bg-color">Server Speed</div>
            <div class="card-body p-3">
              <div class="row">
                <div class="col">
                    <server_speed></server_speed>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End files Storage Capacity & server speed-->

  </div>
</template>

<script>
    import { defineComponent } from 'vue'

    import Footer from '../widgets/Footer.vue'
    import uploader from '../plugins/uploader.vue'
    import uploader_advanced from '../plugins/Advanced/upload.vue'
    import docs_storage from "../components/progress/circular/docs-storage.vue";
    import audio_storage from "../components/progress/circular/audio-storage.vue";
    import video_storage from "../components/progress/circular/video-storage.vue";
    import storage from "../components/progress/circular/storage.vue";
    import recycle_bin_storage from "../components/progress/circular/recycle-bin-storage.vue";
    import server_speed from "../components/progress/circular/server-speed.vue";
    import fileuploadcomponent from "../plugins/FileUploadComponent.vue";
    import multi_upload from "../plugins/Advanced/multi-upload.vue";
    import upload_progress from "../plugins/Advanced/UploadFiles.vue";

    export default defineComponent({
        components: {
            Footer,
            uploader,
            uploader_advanced,
            docs_storage,
            audio_storage,
            video_storage,
            storage,
            recycle_bin_storage,
            server_speed,
            fileuploadcomponent,
            multi_upload,
            upload_progress
        },

        mounted() {

        },
    })
</script>

<style scoped>
.sec-bg-color
{
    background-color: rgb(149, 149, 245) !important;
}

</style>
