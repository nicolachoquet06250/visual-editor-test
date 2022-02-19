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
  form_name, Form
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

editor.defineElement();

customElements.define(spinner_tag, Spinner);

document.querySelector('#app').innerHTML = `
<form action="${env.SERVER_URL}/save/" method="post">
  <visual-editor name="content"
                 preview="${env.SERVER_URL}/preview"
                 iconsUrl="/assets/editor/[name].png"
                 value='[]'></visual-editor>
</form>

<bs-spinner></bs-spinner>
`;

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

window.addEventListener('load', () => {
  document.querySelector('button[aria-label=Close]')?.remove();
  
  showSpinner();
  fetch(`${env.SERVER_URL}/current/`).then(r => r.text()).then(json => {
    document.querySelector('visual-editor').value = json;
    hideSpinner();
    
    document.querySelector('form').addEventListener('submit', handleSavePage);
  });
});