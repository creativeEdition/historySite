//tu beda importy innych plikow js
import {MainSlider} from './components/MainSlider';

export class App{
    initialize(){
        this.initMainSlider()
    }
    // initfunkcja(){
    //     const zmienna = new Klasa();
    //     zmienna.init();
    //
    // }

    initMainSlider(){
        const mainSlider = new MainSlider();
        mainSlider.init();
    }
}
// export default App -gdy nie dam na poczatku nazwy klasy export