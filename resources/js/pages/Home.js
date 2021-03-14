export default {
  data() {
    return {
      inputQty: '',
      packSize: {}
    };
  },
  methods: {
    inputQtyOnEnter() {
      this.calPackSize();
    },
    calPackSize() {
      if (!this.inputQty) {
        return;
      }

      axios
        .post('api/t-shirt/calculate-pack-size', {
          qty: this.inputQty,
        })
        .then(res => this.packSize = res.data);

      this.inputQty = '';
    }
  },
};
