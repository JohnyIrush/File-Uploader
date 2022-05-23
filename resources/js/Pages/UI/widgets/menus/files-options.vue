<template>
	<div class="row">
		<div class="col-6 mb-4">
			<div class="btn-list">
				<a href="/file-manager/uploader" class="btn btn-primary"><i class="fe fe-plus"></i> Upload New Files</a>
				<a href="#" class="btn btn-outline-secondary"><i class="fe fe-folder"></i> New folder</a>
			</div>
		</div>
		<div class="col-6 col-auto">
			<div class="form-group">
				<div class="input-icon">
					<span class="input-icon-addon">
						<i class="fe fe-search"></i>
					</span>
					<input type="text" class="form-control" placeholder="Search Files">
				</div>
			</div>
		</div>
	</div>
</template>

<script>
    import { defineComponent } from 'vue'



    export default defineComponent({
        components: {

        },

        mounted() {

        },
    })
</script>

<style scoped>

</style>
