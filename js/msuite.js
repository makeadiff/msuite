class MInput extends HTMLElement{
  constructor(){
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','formGroup');

    var fieldType,fieldLabel,elementID,required,name,value;


    if(this.hasAttribute('field-type')){
      fieldType = this.getAttribute('field-type');
      var input = document.createElement('input');
      input.setAttribute('type',fieldType);
      input.setAttribute('class','formField');
      elementID = Math.floor((Math.random()*10000)).toString(36);

      input.setAttribute('id',elementID);

      if(this.hasAttribute('required')){
        required = this.getAttribute('required');
        input.setAttribute('required','required');
      }

      if(this.hasAttribute('value')){
        value = this.getAttribute('value');
        input.setAttribute('value',value);
      }

      if(this.hasAttribute('field-label')){
        fieldLabel = this.getAttribute('field-label');
        var label = document.createElement('label');
        label.setAttribute('class','formLabel');
        label.setAttribute('for',elementID);
        input.setAttribute('placeholder',fieldLabel);
        label.innerHTML = fieldLabel;

        if(this.hasAttribute('name')){
          name = this.getAttribute('name');
        }
        else{
          name = fieldLabel.toLowerCase();
        }
        input.setAttribute('name',name);
      }
    }
    this.appendChild(wrapper);
    wrapper.appendChild(input);
    wrapper.appendChild(label);
  }
}

class MRadio extends HTMLElement{
  constructor(){
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','formGroup');

    var fieldType,fieldLabel,elementID,required,name,value;


    if(this.hasAttribute('field-type')){
      fieldType = this.getAttribute('field-type');
      var input = document.createElement('input');
      input.setAttribute('type',fieldType);
      input.setAttribute('class','formField');
      elementID = Math.floor((Math.random()*10000)).toString(36);

      input.setAttribute('id',elementID);

      if(this.hasAttribute('required')){
        required = this.getAttribute('required');
        input.setAttribute('required','required');
      }

      if(this.hasAttribute('value')){
        value = this.getAttribute('value');
        input.setAttribute('value',value);
      }

      if(this.hasAttribute('field-label')){
        fieldLabel = this.getAttribute('field-label');
        var label = document.createElement('label');
        label.setAttribute('class','formLabel');
        label.setAttribute('for',elementID);
        input.setAttribute('placeholder',fieldLabel);
        label.innerHTML = fieldLabel;

        if(this.hasAttribute('name')){
          name = this.getAttribute('name');
        }
        else{
          name = fieldLabel.toLowerCase();
        }
        input.setAttribute('name',name);
      }
    }
    this.appendChild(wrapper);
    wrapper.appendChild(input);
    wrapper.appendChild(label);
  }
}

class MSelect extends HTMLElement{
  constructor(){
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','select');

    var options = this.innerHTML;
    var id, name;
    this.innerHTML = '';

    var select = document.createElement('select');

    if(this.hasAttribute('id')){
      id = this.getAttribute('id');
      select.setAttribute('id',id);
    }

    if(this.hasAttribute('name')){
      name = this.getAttribute('name');
      select.setAttribute('name',name);
    }

    this.appendChild(wrapper);
    wrapper.appendChild(select);
    select.innerHTML = options;

  }
}

var progressbar = document.getElementsByClassName('progressbar');
var fieldset_count = progressbar[0].children.length;

var progressbar_width = Math.floor(100/fieldset_count);
$('.progressbar li').css({
  width: progressbar_width+'%'
});

// var sidebar = $('.sidebar');
// console.log(sidebar);


customElements.define('m-input',MInput);
customElements.define('m-select',MSelect);
customElements.define('m-radio',MRadio);
