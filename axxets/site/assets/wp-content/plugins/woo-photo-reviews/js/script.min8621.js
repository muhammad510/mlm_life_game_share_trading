jQuery(document).ready(function(e){let r=woocommerce_photo_reviews_params.hasOwnProperty("comments_container_id")?woocommerce_photo_reviews_params.comments_container_id:"comments";e("#"+r).prepend(e(".wcpr-filter-container")).prepend(e(".wcpr-overall-rating-and-rating-count")).prepend(e(".woocommerce-Reviews-title").eq(0)),e("#commentform").attr("enctype","multipart/form-data");let t=woocommerce_photo_reviews_params.max_files,o=0;e("#commentform").on("change",".wcpr_image_upload",function(r){o=e(this.files).length}),e("#commentform").find('input[type="submit"]').on("click",function(r){let n=e(this).closest("form"),a=n.find('textarea[id="comment"]')||n.find('textarea[name="comment"]'),m=n.find('input[name="author"]'),i=n.find('input[name="email"]'),_=n.find(".wcpr_image_upload");if(a.length>0&&!a.val())return alert(woocommerce_photo_reviews_params.i18n_required_comment_text),r.preventDefault(),a.focus(),!1;if("on"==woocommerce_photo_reviews_params.required_image&&0==o)return alert(woocommerce_photo_reviews_params.warning_required_image),r.preventDefault(),!1;if(m.length>0&&m.attr("required")&&!m.val())return alert(woocommerce_photo_reviews_params.i18n_required_name_text),r.preventDefault(),m.focus(),!1;if(i.length>0&&i.attr("required")&&!i.val())return alert(woocommerce_photo_reviews_params.i18n_required_email_text),r.preventDefault(),i.focus(),!1;if(_.length>0)if(_.prop("multiple")){if(o>t)return alert(woocommerce_photo_reviews_params.warning_max_files),r.preventDefault(),!1}else if(_.length>t)return alert(woocommerce_photo_reviews_params.warning_max_files),r.preventDefault(),!1;return!1===n.find('input[name="wcpr_gdpr_checkbox"]').prop("checked")?(alert(woocommerce_photo_reviews_params.warning_gdpr),r.preventDefault(),!1):void 0})});