<template>
  <div>
    <button class="btn btn-info col-sm-12" @click.prevent="numberOfDivs++">
      Add Another one
    </button>
    <input type="hidden" name="numberOfDivs" :value="numberOfDivs" />
    <div v-for="(item, index) in numberOfDivs" :key="index" class="border-0">
      <div>
        <label for="addres-article" class="addres-article my-2">کیفیت</label>
        <input
          type="text"
          id="addres-article"
          placeholder="کیفیت ویدیو  را اینجا وارد کنید"
          class="form-control addres-article-input"
          :name="'quality' + item"
          required
        />
        <label for="addres-article" class="addres-article my-2"
          >لینک دانلود</label
        >
        <input
          type="text"
          id="addres-article"
          placeholder="لینک دانلود ویدیو  را اینجا وارد کنید"
          class="form-control addres-article-input"
          :name="'link' + item"
          required
        />
      </div>
      <hr />
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      numberOfDivs: 1,
    };
  },
  methods: {},
  mounted() {
    console.log("Component mounted.");
  },
};
</script>
