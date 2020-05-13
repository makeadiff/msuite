# MSuite

## Usage Guideline

### Custom HTML Elements

MSuite has built-in Custom HTML Elements namely

* m-input
* m-select
* m-radio
* m-textarea

Usage of Custom Elements

#### MInput (```<m-input/>```)
```
<m-input
  field-type="text"
  name="name_of_field"
  field-label="Placeholder Text Comes Here"
  required=""
  value=""/>
</m-input>
```

To use without custom HTML Tags.

```
<div class="formGroup">
  <input
    class="formField"
    type="text"
    value=""
  />
  <label class="formLabel">
    Placeholder Text Comes Here
  </label>
</div>

```

### Vue Package Setup
