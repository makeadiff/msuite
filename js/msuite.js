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

      if(!this.hasAttribute('id')){
        input.setAttribute('id',elementID);
      }
      else{
        elementID = this.getAttribute('id');
        input.setAttribute('id',elementID);
        this.removeAttribute('id');
      }

      if(this.hasAttribute('required')){
        required = this.getAttribute('required');
        input.setAttribute('required','required');
        this.removeAttribute('required');
      }

      if(this.hasAttribute('value')){
        value = this.getAttribute('value');
        input.setAttribute('value',value);
        this.removeAttribute('value');
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
        this.removeAttribute('field-label');
        this.removeAttribute('name');
      }

      this.removeAttribute('field-type');
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

      if(!this.hasAttribute('id')){
        input.setAttribute('id',elementID);
      }
      else{
        elementID = this.getAttribute('id');
        input.setAttribute('id',elementID);
      }

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
    var id, name, required;
    this.innerHTML = '';

    var select = document.createElement('select');

    if(this.hasAttribute('id')){
      id = this.getAttribute('id');
      select.setAttribute('id',id);
      this.removeAttribute('id');
    }

    if(this.hasAttribute('name')){
      name = this.getAttribute('name');
      select.setAttribute('name',name);
      this.removeAttribute('name');
    }

    if(this.hasAttribute('required')){
      required = this.getAttribute('required');
      select.setAttribute('required','required');
      this.removeAttribute('required');
    }

    if(this.hasAttribute('onchange')){
      onchange = this.getAttribute('onchange');
      select.setAttribute('onchange',onchange);
      this.removeAttribute('onchange');
    }

    this.appendChild(wrapper);
    wrapper.appendChild(select);
    select.innerHTML = options;

  }
}

class MTextArea extends HTMLElement{
  constructor(){
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','formGroup');

    var fieldLabel,elementID,required,name,value;

    var input = document.createElement('textarea');
    input.setAttribute('class','formField');
    if(this.innerHTML!=''){
      input.innerHTML = this.innerHTML;
      this.innerHTML = '';
    }
    elementID = Math.floor((Math.random()*10000)).toString(36);

    if(!this.hasAttribute('id')){
      input.setAttribute('id',elementID);
    }
    else{
      elementID = this.getAttribute('id');
      input.setAttribute('id',elementID);
    }

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

    this.appendChild(wrapper);
    wrapper.appendChild(input);
    wrapper.appendChild(label);
  }
}

// <div class="checkbox">
//   <label>
//     <input type="checkbox" checked="checked"/><i class="helper"></i>I'm the label from a checkbox
//   </label>
// </div>

class MCheckbox extends HTMLElement{
  constructor(){
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','checkbox');
    var fieldLabel,elementID,required,name,value,className,wrapperClassName,onchange, onclick;
    var label = document.createElement('label');
    var input = document.createElement('input');
    var helper = document.createElement('i');

    input.setAttribute('type','checkbox');
    helper.setAttribute('class','helper');

    if(this.hasAttribute('wrapper-class')){
      wrapperClassName = this.getAttribute('wrapper-class');
      var classList = wrapperClassName.split(" ");
      classList.forEach((item, i) => {
        wrapper.classList.add(item);
      });
      this.removeAttribute('wrapper-class');
    }

    if(this.hasAttribute('field-label')){
      var textLabel = this.getAttribute('field-label');
    }
    else{
      var textLabel = '';
    }

    if(this.hasAttribute('name')){
      input.setAttribute('name',this.getAttribute('name'));
      this.removeAttribute('name');
    }
    else{
      return;
    }

    if(this.hasAttribute('checked')){
      input.setAttribute('checked','checked');
      this.removeAttribute('checked');
    }

    if(this.hasAttribute('onchange')){
      onchange = this.getAttribute('onchange');
      input.setAttribute('onchange',onchange);
      this.removeAttribute('onchange');
    }

    if(this.hasAttribute('onclick')){
      onclick = this.getAttribute('onclick');
      input.setAttribute('onclick',onclick);
      this.removeAttribute('onclick');
    }

    if(this.hasAttribute('value')){
      value = this.getAttribute('value');
      input.setAttribute('value',value);
      this.removeAttribute('value');
    }

    if(this.hasAttribute('required')){
      required = this.getAttribute('required');
      input.setAttribute('required','required');
      this.removeAttribute('required');
    }

    if(this.hasAttribute('class')){
      className = this.getAttribute('class');
      input.setAttribute('class',className);
      this.removeAttribute('class');
    }

    if(this.hasAttribute('id')){
      elementID = this.getAttribute('id');
      input.setAttribute('id',elementID);
      this.removeAttribute('id');
    }

    this.appendChild(wrapper);
    wrapper.appendChild(label);
    label.appendChild(input);
    label.appendChild(helper);
    label.innerHTML += textLabel;
  }
}

class MMultiSelect extends HTMLElement {
  constructor() {
    super();
    var wrapper = document.createElement('div');
    wrapper.setAttribute('class','multi-select');

    var dropdownButton = document.createElement('button');
    dropdownButton.setAttribute('class','dropdown-toggle');
    dropdownButton.setAttribute('type','button');
    dropdownButton.setAttribute('data-toggle','dropdown');
    dropdownButton.setAttribute('aria-haspopup','true');
    dropdownButton.setAttribute('aria-expanded','false');


    if(this.hasAttribute('field-label')){
      var buttonText = document.createElement('p');
      buttonText.setAttribute('class','form-label');
      buttonText.innerHTML = this.getAttribute('field-label');
      wrapper.appendChild(buttonText);
    }

    this.appendChild(wrapper);
    wrapper.appendChild(dropdownButton);
    // console.log(this.children);
  }
}

var multiSelectOptions = document.querySelector('li.options');
let optionSelect = (element) => {
  // element.classList.toggle('active');
  console.log(element);
}
if(multiSelectOptions){
  multiSelectOptions.addEventListener('click',optionSelect);
}

var progressbar = document.getElementsByClassName('progressbar');
if(progressbar.length!=0){
  var fieldset_count = progressbar[0].children.length;
  var progressbar_width = 100/fieldset_count;
  $('.progressbar li').css({
    width: progressbar_width+'%'
  });
}







customElements.define('m-input',MInput);
customElements.define('m-select',MSelect);
customElements.define('m-radio',MRadio);
customElements.define('m-textarea',MTextArea);
customElements.define('m-checkbox',MCheckbox);
customElements.define('m-multiselect',MMultiSelect);
