export const spinner_tag = 'bs-spinner';

export class Spinner extends HTMLElement {
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