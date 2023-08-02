class FormSubmitOne{
    constructor(settings){
        this.settings = settings;
        this.form = document.querySelector(settings.form);
        this.formButton = document.querySelector(settings.button);
        if(this.form){
            this.url = this.form.getAttribute("action");
        }
        this.sendForm = this.sendForm.bind(this);
    }
    displaySucess(){
        this.form.innerHTML = this.settings.success;
    }
    displayError(){
        this.form.innerHTML = this.settings.error;
    }
    getFormObject(){
        const formObject = {};
        const fields = this.form.querySelectorAll("[name]");
        fields.forEach((field) => {
            formObject[field.getAttribute("name")] = field.value;
        });
        return formObject;
    }
    onSubmission(event){
        event.preventDefault();
        event.target.disabled = true;
        event.target.innerText = "Enviando...";
    }
    async sendForm(event){
        try{
            this.onSubmission(event);
            await fetch(this.url, {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    Accept: "application/json",
                },
                body: JSON.stringify(this.getFormObject()),
            });
            this.displaySucess();
        } catch (error) {
            this.displayError();
            throw new Error(error);
        }
    }
    init(){
        if (this.form) this.formButton.addEventListener("click", this.sendForm);
        return this;
    }
}

const FormSubmitOne = new FormSubmitOne({
    form: "[data-form]",
    button: "[data-button]",
    success: "<h1>Mensagem Enviada Com Sucesso!</h1>",
    error: "<h1>Não foi possível enviar sua mensagem!</h1>",
});
FormSubmitOne.init();