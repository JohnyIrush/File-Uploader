<template>
    <div class="row">
        <div class="col">
          <div class="dropZone ">
              <input type="file" id="dropZoneFile" class="dropZoneFile" ref="dropZoneFile" @change="upload"  multiple accept="image/*, audio/*, video/*">
              <div class="dropZoneWrap" @dragenter.prevent @dropover.prevent @drop.prevent="upload">
                <label for="dropZoneFile" class="dropZoneLabel">
                  <svg width="10em" height="10em" viewBox="0 0 16 12" class="dropZoneImage" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path
                      fill-rule="evenodd"
                      d="m 8.0274054,0.49415269 a 5.53,5.53 0 0 0 -3.594,1.34200001 c -0.766,0.66 -1.321,1.52 -1.464,2.383 -1.676,0.37 -2.94199993,1.83 -2.94199993,3.593 0,2.048 1.70799993,3.6820003 3.78099993,3.6820003 h 8.9059996 c 1.815,0 3.313,-1.43 3.313,-3.2270003 0,-1.636 -1.242,-2.969 -2.834,-3.194 -0.243,-2.58 -2.476,-4.57900001 -5.1659996,-4.57900001 z m 2.3539996,5.14600001 -1.9999996,-2 a 0.5,0.5 0 0 0 -0.708,0 l -2,2 a 0.5006316,0.5006316 0 1 0 0.708,0.708 l 1.146,-1.147 v 3.793 a 0.5,0.5 0 0 0 1,0 v -3.793 l 1.146,1.147 a 0.5006316,0.5006316 0 0 0 0.7079996,-0.708 z"
                      />
                  </svg>
                  <div class="dropZoneBody">
                    <p>
                      <strong class="dropZoneTitle">Drag and drop files to upload</strong>
                    </p>
                    <p>
                      <small class="dropZoneText">Your files will be added automatically</small>
                    </p>
                    <button type="button" class="button">or select files</button>
                  </div>
                </label>
              </div>
          </div>
        </div>
    </div>
    <uploaded_files_preview :files="files" @upload="submit"></uploaded_files_preview>
    <div id="output" class="container"></div>
</template>

<script>

import uploaded_files_preview from './uploaded-files-preview.vue'
 import MyFormData from "./MyFormData";

export default {
name: 'App',
components:{
   uploaded_files_preview
},
data()
{
    return {
    form: new MyFormData({contract_id: 5, files: []}),
     files: [],
     fileProgress: {}
    }
},

 watch: {
     files:
     {
         handler(newVal)
         {
             newVal.forEach((item, index) => {

             });
         }
     }
},
   methods:
   {
     upload(event) {

         // const inputValue = e.target.files || e.dataTransfer.files || this.$refs.dropZoneFile.files;

         for (let file of event.target.files) {
             try {
                 let reader = new FileReader();
                 reader.readAsDataURL(file); // Not sure if this will work in this context.
                 this.form.files.push(file);
                 this.files.push(file)
             } catch {}
         }

           const uploadedFilesPreviewModal = document.querySelector("#uploaded-files-preview");

           var previewModal = new bootstrap.Modal(uploadedFilesPreviewModal, options)

           previewModal.show();

     },
     submit(){
         console.log("uploading reached");
         this.form.post('/api/upload')
             .catch(errors => {
                 throw errors;
             })
             .then((response)=>{
                 console.log(response)
             });
     }
    }
}
</script>


<style scoped>


i{
    font-size: 36px !important;
}

.dropZone {
    overflow-wrap: break-word;
    padding: 0.5rem;
    max-width: calc(100vw - 0.5rem);
    max-height: calc(100vh - 0.5rem)
}
.dropZone .dropZoneFile {
    /*position: absolute;*/
    width: 0px;
    height: 0px;
    overflow: hidden;
    clip: rect(1px, 1px, 1px, 1px)
}
.dropZone .dropZoneWrap {
    border: 3px dashed currentColor;
    box-shadow: -1px 5px 25px -9px rgba(0, 0, 0, 0.2)
}
.dropZone .dropZoneWrap .dropZoneLabel {
    display: grid;
    place-items: center;
    width: 100%;
    height: 100%;
    padding-top: 1.5rem;
    padding-bottom: 2.5rem;
    cursor: pointer
}
.dropZone .dropZoneWrap .dropZoneImage {
    pointer-events: none;
    color: currentColor
}
.dropZone .dropZoneWrap .dropZoneBody {
    text-align: center
}
.dropZone .dropZoneWrap .dropZoneBody p, .dropZone .dropZoneWrap .dropZoneBody span {
    margin: 0px
}
.dropZone .dropZoneWrap .dropZoneBody .dropZoneTitle {
    color: #333
}
.dropZone .dropZoneWrap .dropZoneBody .dropZoneText {
    color: #737373
}
.dropZone .dropZoneWrap .dropZoneBody .button {
    background-color: transparent;
    display: inline-block;
    text-align: center;
    vertical-align: middle;
    pointer-events: none;
    font-size: 1rem;
    line-height: 1.5rem;
    font-weight: 400;
    user-select: none;
    margin-top: 1.25rem;
    border-radius: 0.35rem;
    color: currentColor;
    border: 2px solid currentColor;
    padding: 0.375rem 0.75rem
}
</style>
