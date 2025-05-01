var hieu_ung = {
  el: "#round_play",
  stop_point: null,
  interval_id: null,
  stop_index: {
    1: [0], //50 Vpoint
    2: [30], //20 Vpoint
    3: [60, 180, 300], //5 Vpoint
    4: [90, 210], //90 - Máº·t máº¿u , 210 - Máº·t cÆ°á»i
    5: [120], //40 Vpoint
    6: [150], //10 Vpoint
    7: [240], //30 Vpoint
    8: [270], //10 Vpoint
    9: [330], // flower
  },
  rotate_count: 5,
  old_point: {
    check: false,
    value_old: null,
    value_new: null,
  },

  play: function () {
    if (!this.stop_point) return;
    if (this.old_point.value_old == null) {
      this.old_point.value_old = this.old_point.value_new;
    }

    $(this).css(
      "-webkit-transform",
      "rotate(" + this.old_point.value_old + "deg)"
    );
    $(this).css(
      "-moz-transform",
      "rotate(" + this.old_point.value_old + "deg)"
    );
    $(this).css("transform", "rotate(" + this.old_point.value_old + "deg)");
    var v_old = this.old_point.value_old;
    var v_stop = this.stop_point;
    var element = this.el;
    var v_this = this;

    $(this.el).animate(
      { transform: v_stop },
      {
        step: function (now, fx) {
          fx.start = v_old;
          if (now >= v_old) {
            $(this).css("-webkit-transform", "rotate(" + now + "deg)");
            $(this).css("-moz-transform", "rotate(" + now + "deg)");
            $(this).css("transform", "rotate(" + now + "deg)");
          }
        },
        duration: 5000,
      },
      "ease-out"
    );
    //},0)
  },
  stop: function () {
    $(this.el).stop();
  },
  setStopPoint: function (params) {
    if (this.stop_point != null) {
      this.old_point.check = true;
    }
    var arr_point = this.stop_index[params.coupon_id];

    var valueArrPoint = arr_point[Math.floor(Math.random() * arr_point.length)];
    console.log("GiĂ¡ trá»‹ tá»a Ä‘á»™ : " + valueArrPoint);
    this.stop_point = this.rotate_count * 360 + valueArrPoint;

    if (this.old_point.check) {
      this.old_point.value_old = this.old_point.value_new;
      this.old_point.value_new = valueArrPoint;
    } else {
      this.old_point.value_old = 0;
      this.old_point.value_new = valueArrPoint;
    }
  },
};