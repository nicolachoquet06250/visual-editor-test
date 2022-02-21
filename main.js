import { VisualEditor } from '@boxraiser/visual-editor';
import { 
  card_row_name, CardRow, 
  simple_card_name, SimpleCard,
  accordion_name, Accordion,
  tariff_cartridge_name, TariffCartridge,
  search_navbar_name, SearchNavbar,
  search_navbar_with_title_name, SearchNavBarWithTitle,
  image_banner_name, ImageBanner,
  simple_title_name, SimpleTitle,
  simple_paragraph_name, SimpleParagraph,
  form_name, Form,
  alert_name, Alert,
  button_group_name, ButtonGroup,
  slider_name, Slider,
  simple_collapse_name, SimpleCollapse
} from './components';
import { spinner_tag, Spinner } from './ce';
import env from './env.json';

let editor = new VisualEditor();

editor.registerComponent(simple_card_name, SimpleCard);
editor.registerComponent(card_row_name, CardRow);
editor.registerComponent(accordion_name, Accordion);
editor.registerComponent(tariff_cartridge_name, TariffCartridge);
editor.registerComponent(search_navbar_name, SearchNavbar);
editor.registerComponent(search_navbar_with_title_name, SearchNavBarWithTitle);
editor.registerComponent(image_banner_name, ImageBanner);
editor.registerComponent(simple_title_name, SimpleTitle);
editor.registerComponent(simple_paragraph_name, SimpleParagraph);
editor.registerComponent(form_name, Form);
editor.registerComponent(alert_name, Alert);
editor.registerComponent(button_group_name, ButtonGroup);
editor.registerComponent(slider_name, Slider);
editor.registerComponent(simple_collapse_name, SimpleCollapse);

editor.defineElement();

customElements.define(spinner_tag, Spinner);

document.querySelector('#app').innerHTML = `
<style>
    #app {
        width: 100vw;
        height: 100vh;
        
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
    }
    
    form {
        display: flex;
        flex-direction: column;
        justify-content: flex-start;
        align-items: flex-start;
        min-height: 200px;
        width: 250px;
        background-color: rgb(231,228,228);
        border-radius: 10px;
    }
    
    form > * {
        margin: 15px;
    }
    
    input[type=password] {
        width: calc(100% - 30px);
    }
    
    input[type=submit] {
        outline: none;
        display: flex;
        -webkit-align-items: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        align-items: center;
        gap: 0.5em;
        border: none;
        color: #fff;
        height: 48px;
        padding: 0 1em;
        border-radius: 4px;
        transition: background-color 0.3s;
        background-color: rgb(28,36,71);
    }

    #error {
        color: red;
        font-weight: bold;
    }
</style>

<form id="login-form" action="${env.SERVER_URL}/login/" method="post">
    <h1>
        Connexion
    </h1>

    <input class="form-control" id="password" type="password" placeholder="Password" />
    
    <input type="submit" value="Se connected" />
    
    <span id="error"></span>
</form>
`;

document.querySelector('#login-form').addEventListener('submit', e => {
  e.preventDefault();

  fetch(e.target.getAttribute('action'), {
    method: 'post',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      password: document.querySelector('#password').value
    })
  }).then(r => r.json())
      .then(json => {
        if (json.ok) {
          loadVisualEditor();
        } else {
          document.querySelector('#error').innerHTML = 'Le mot de passe est incorrect';
        }
      })
});

function loadVisualEditor() {
  document.querySelector('#app').innerHTML = `
    <form action="${env.SERVER_URL}/save/" method="post">
      <visual-editor name="content"
                     preview="${env.SERVER_URL}/preview"
                     iconsUrl="/assets/editor/[name].png"
                     value='[]'></visual-editor>
    </form>
    
    <bs-spinner></bs-spinner>
  `;

  document.querySelector('button[aria-label=Close]')?.remove();

  showSpinner();
  fetch(`${env.SERVER_URL}/current/`).then(r => r.text()).then(json => {
    document.querySelector('visual-editor').value = json;
    hideSpinner();

    document.querySelector('form').addEventListener('submit', handleSavePage);
  });
}

function showSpinner() {
  document.querySelector('bs-spinner').removeAttribute('hidden');
}

function hideSpinner() {
  document.querySelector('bs-spinner').setAttribute('hidden', '');
}

function handleSavePage(e) {
  e.preventDefault();
  
  showSpinner();
  
  fetch(e.target.getAttribute('action'), {
    method: e.target.getAttribute('method'),
    headers: {
      'Content-Type': 'application/json'
    },
    body: document.querySelector('[name=content]').value
  }).then(r => r.json())
  .then(json => {
    hideSpinner();
  });
}
