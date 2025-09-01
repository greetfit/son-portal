<template>
  <b-card no-body>
    <b-card-header v-if="title">
      <b-card-title>{{ title }}</b-card-title>
    </b-card-header>
    <b-card-body>
      <b-form action="/" method="post" class="dropzone bg-light-subtle py-5" id="myAwesomeDropzone"
        data-plugin="dropzone" data-previews-container="#file-previews"
        data-upload-preview-template="#uploadPreviewTemplate">
        <div class="fallback">
          <input name="file" type="file" :multiple="true">
        </div>
        <div class="dz-message needsclick">
          <i class="ri-upload-cloud-2-line fs-48 text-primary"></i>
          <h3 class="mt-4">Drop your images here, or <span class="text-primary">click to browse</span></h3>
          <span class="text-muted fs-13">1600 x 1200 (4:3) recommended. PNG, JPG and GIF files are allowed</span>
        </div>
      </b-form>


      <ul class="list-unstyled mb-0" id="dropzone-preview">
        <li class="mt-2" id="dropzone-preview-list">
          <!-- This is used as the file preview template -->
          <div class="border rounded">
            <div class="d-flex p-2">
              <div class="flex-shrink-0 me-3">
                <div class="avatar-sm bg-light rounded">
                  <img data-dz-thumbnail class="img-fluid rounded d-block" src="#" alt="Dropzone-Image" />
                </div>
              </div>
              <div class="flex-grow-1">
                <div class="pt-1">
                  <h5 class="fs-14 mb-1" data-dz-name>&</h5>
                  <p class="fs-13 text-muted mb-0" data-dz-size></p>
                  <strong class="error text-danger" data-dz-errormessage></strong>
                </div>
              </div>
              <div class="flex-shrink-0 ms-3">
                <button data-dz-remove class="btn btn-sm btn-danger">Delete</button>
              </div>
            </div>
          </div>
        </li>
      </ul>

    </b-card-body>
  </b-card>
</template>

<script setup lang="ts">
import { onMounted } from "vue";
import Dropzone from "dropzone";

onMounted(() => {
  const dropzonePreviewNode = document.querySelector('#dropzone-preview-list') as HTMLElement;
  dropzonePreviewNode.id = '';
  if (dropzonePreviewNode) {
    const previewTemplate = dropzonePreviewNode.parentElement?.innerHTML;
    dropzonePreviewNode.parentNode?.removeChild(dropzonePreviewNode);
    const dropzone = new Dropzone('.dropzone', {
      url: 'https://httpbin.org/post',
      method: 'post',
      previewTemplate: previewTemplate,
      previewsContainer: '#dropzone-preview'
    });
  }
});

type FileUploadPropType = {
  title?: string;
};

defineProps<FileUploadPropType>();
</script>