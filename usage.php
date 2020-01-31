<?php include 'global_header.php'; ?>
<?php include 'components/navbar.php'; ?>

<div class="container">
  <div class="elements" id="usage">
    <h1>Vue.Js Usage & Documentation</h1>
    <h3>MSuiteHeader</h3>
    <p>
      <span class="mandatory-code">Attributes in Cyan</span> are Compulsary
    </p>
    <pre>
      <code>
      <span class="highlight-code">&lt;MSuiteHeader</span>
        <span class="mandatory-code">app_name="Vue Test"</span>
        app_logo="https://logo.url"
        base_app_url = "/home"
        <span class="comment-code">&lt;-- If Logged In User Exists --&gt;</span>
        v-bind:user = "{
          name:'Rohit',
          profile_image:'https://picsum.photos/id/11/200/300',
          groups: 'Director, Technology'
        }"
        <span class="comment-code">&lt;-- If You want to add links to Navbar --&gt;</span>
        v-bind:links = "{
          0: {
            label:'Usage',
            url:'/usage/'
          },
          1: {
            label: 'Components',
            url:'/components'
          }...
        }"
        <span class="comment-code">&lt;-- If You want to add links within Dropdown to Navbar --&gt;</span>
        v-bind:dropdown_menu = "{
          name: 'Dropdown',
          links:{
            0:{
              label: 'One',
              url: '/one'
            }...
          }
        }"
      <span class="highlight-code">&gt;</span>
      <span class="highlight-code">&lt;/MsuiteHeader&gt;</span>
      </code>
    </pre>
  </div>
</div>

<?php include 'global_footer.php'; ?>
