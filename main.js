import { VisualEditor } from '@boxraiser/visual-editor';
import { 
  card_row_name, CardRow, 
  simple_card_name, SimpleCard,
  accordion_name, Accordion,
  tariff_cartridge_name, TariffCartridge
} from './components';

let editor = new VisualEditor();

editor.registerComponent(simple_card_name, SimpleCard);
editor.registerComponent(card_row_name, CardRow);
editor.registerComponent(accordion_name, Accordion);
editor.registerComponent(tariff_cartridge_name, TariffCartridge);

editor.defineElement();

class Spinner extends HTMLElement {
  get style() {
    return `
    <style>
      bs-spinner,
      bs-spinner .overlay {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        background-color: rgba(255, 255, 255, .3);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        height: 100vh;
      }
    </style>
    `;
  }

  get template() {
    return `
    <div class="overlay">
      <div class="text-center">
        <div class="spinner-border spinner-border-lg" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
      </div>
    </div>
    `;
  }
  
  constructor() {
    super();

    this.innerHTML = this.style + this.template;
  }
}

customElements.define('bs-spinner', Spinner);