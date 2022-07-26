<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="footer-logo">
                <div class="footer__logo">
                    <a href="{{ Route('home') }}">
                        <img src="/img/logo-footer.svg" alt="Apple Bro">
                    </a>
                </div>
                <div class="footer__copy">
                    {{__('home.Интернет-магазины')}} AppleBro.uz. <br>
                    {{__('home.Все права защищены')}}.
                </div>
            </div>
            <div class="footer-menu">
                <div class="footer-menu__title">
                    {{__('home.КОМПАНИЯ')}}
                </div>
                <ul class="footer-menu__list">
                    <li>
                        {{-- <a href=""> --}}
                            {{__('home.О компании')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Новости и акции')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Контакты')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Trade-in')}}
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
            <div class="footer-menu">
                <div class="footer-menu__title">
                    {{__('home.ИНФОРМАЦИЯ')}}
                </div>
                <ul class="footer-menu__list">
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Как заказать')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Доставка и оплата')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Возврат и гарантии')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Покупка в кредит без переплаты')}}
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#"> --}}
                            {{__('home.Политика конфиденциальности')}}
                        {{-- </a> --}}
                    </li>
                </ul>
            </div>
            <div class="footer-info">
                <a href="tel:8 (800) 600-27-66" class="footer-info__tel">
                    8 (800) 600-27-66
                </a>
                <ul class="footer-info__social">
                    <li>
                        {{-- <a href="#" target="_blank"> --}}
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0003 4.36328C12.8401 4.36328 12.4435
                                2023 4.43358C9.9636 4.49031 9.11805 4.68643 8.37819 4.97419C7.61288 5.2714 6.96369 5.66898 6.31692 6.31601C5.66967 6.9628 5.2721 7.61201 4.97393 8.3771C4.68545 9.11722 4.4891 9.96304 4.43334 11.2013C4.37783 12.4426 4.36328 12.8394 4.36328 15.9996C4.36328 19.1599 4.37734 19.5553 4.43358 20.7965C4.49055 22.0353 4.68667 22.8809 4.97417 23.6207C5.27162 24.3861 5.66918 25.0353 6.31619 25.6821C6.96272 26.3293 7.61191 26.7279 8.37674 27.0251C9.11708 27.3129 9.96287 27.509 11.2014 27.5657C12.4426 27.6222 12.8389 27.636 15.9988 27.636C19.1592 27.636 19.5546 27.6222 20.7958 27.5657C22.0345 27.509 22.881 27.3129 23.6214 27.0251C24.3864 26.7279 25.0347 26.3293 25.6812 25.6821C26.3284 25.0353 26.726 24.3861 27.0242 23.621C27.3102 22.8809 27.5066 22.035 27.5648 20.7967C27.6205 19.5555 27.6351 19.1599 27.6351 15.9996C27.6351 12.8394 27.6205 12.4428 27.5648 11.2016C27.5066 9.9628 27.3102 9.11722 27.0242 8.37734C26.726 7.61201 26.3284 6.9628 25.6812 6.31601C25.0339 5.66874 24.3867 5.27116 23.6206 4.97419C22.8788 4.68643 22.0328 4.49031 20.7941 4.43358C19.5529 4.3771 19.1577 4.36328 15.9966 4.36328H16.0003ZM14.9564 6.46025C15.2662 6.45977 15.6119 6.46025 16.0003 6.46025C19.1071 6.46025 19.4753 6.4714 20.7022 6.52716C21.8367 6.57904 22.4524 6.76861 22.8626 6.92789C23.4056 7.1388 23.7928 7.39092 24.1998 7.79819C24.607 8.20546 24.8591 8.59334 25.0705 9.13637C25.2298 9.54607 25.4196 10.1618 25.4712 11.2964C25.527 12.523 25.5391 12.8915 25.5391 15.997C25.5391 19.1024 25.527 19.4709 25.4712 20.6976C25.4194 21.8321 25.2298 22.4479 25.0705 22.8576C24.8596 23.4006 24.607 23.7873 24.1998 24.1943C23.7925 24.6016 23.4059 24.8537 22.8626 25.0646C22.4529 25.2246 21.8367 25.4137 20.7022 25.4656C19.4756 25.5213 19.1071 25.5335 16.0003 25.5335C12.8932 25.5335 12.525 25.5213 11.2983 25.4656C10.1638 25.4132 9.54809 25.2236 9.13768 25.0644C8.59467 24.8535 8.2068 24.6013 7.79954 24.1941C7.39228 23.7868 7.14017 23.3999 6.92878 22.8566C6.76951 22.4469 6.5797 21.8312 6.52806 20.6966C6.47231 19.4699 6.46116 19.1015 6.46116 15.9941C6.46116 12.8867 6.47231 12.5201 6.52806 11.2935C6.57994 10.1589 6.76951 9.54316 6.92878 9.13298C7.13968 8.58995 7.39228 8.20207 7.79954 7.7948C8.2068 7.38752 8.59467 7.1354 9.13768 6.92401C9.54785 6.76401 10.1638 6.57492 11.2983 6.5228C12.3718 6.47431 12.7878 6.45977 14.9564 6.45734V6.46025ZM22.2115 8.39237C21.4406 8.39237 20.8151 9.0171 20.8151 9.78825C20.8151 10.5592 21.4406 11.1846 22.2115 11.1846C22.9824 11.1846 23.6078 10.5592 23.6078 9.78825C23.6078 9.01734 22.9824 8.39189 22.2115 8.39189V8.39237ZM16.0003 10.0239C12.7002 10.0239 10.0247 12.6995 10.0247 15.9996C10.0247 19.2998 12.7002 21.9742 16.0003 21.9742C19.3003 21.9742 21.9749 19.2998 21.9749 15.9996C21.9749 12.6995 19.3 10.0239 16 10.0239H16.0003ZM16.0003 12.1209C18.1423 12.1209 19.8789 13.8573 19.8789 15.9996C19.8789 18.1417 18.1423 19.8784 16.0003 19.8784C13.858 19.8784 12.1216 18.1417 12.1216 15.9996C12.1216 13.8573 13.858 12.1209 16.0003 12.1209Z" fill="#AFAFAF"/>
                            </svg>			
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#" target="_blank"> --}}
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M24.4332 7.4839L5.16767 14.9146C3.85277 15.4422 3.86057 16.1756 4.928 16.5026L9.73287 18.0023L11.5713 23.6389C11.7948 24.2558 11.6847 24.5005 12.3325 24.5005C12.8324 24.5005 13.0542 24.2725 13.3327 24.0005C13.5097 23.8273 14.5611 22.8051 15.735 21.6638L20.7329 25.3565C21.6526 25.8639 22.3167 25.601 22.5457 24.5023L25.8265 9.04205C26.1624 7.69538 25.3131 7.08454 24.4332 7.4839ZM10.4869 17.6578L21.3171 10.8249C21.8578 10.497 22.3535 10.6733 21.9465 11.0346L12.673 19.4016L12.3119 23.2528L10.4869 17.6578Z" fill="#AFAFAF"/>
                            </svg>											
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#" target="_blank"> --}}
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M4 16C4 21.9333 8.33333 26.8667 14 27.8667L14.0666 27.8134C14.0444 27.8091 14.0222 27.8048 14 27.8003V19.3337H11V16.0003H14V13.3337C14 10.3337 15.9333 8.66699 18.6667 8.66699C19.5333 8.66699 20.4667 8.80033 21.3333 8.93366V12.0003H19.8C18.3333 12.0003 18 12.7337 18 13.667V16.0003H21.2L20.6667 19.3337H18V27.8003C17.9778 27.8048 17.9556 27.8091 17.9334 27.8134L18 27.8667C23.6667 26.8667 28 21.9333 28 16C28 9.4 22.6 4 16 4C9.4 4 4 9.4 4 16Z" fill="#AFAFAF"/>
                            </svg>										
                        {{-- </a> --}}
                    </li>
                    <li>
                        {{-- <a href="#" target="_blank"> --}}
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M25.3904 7.84701C26.4184 8.12378 27.2289 8.93432 27.5057 9.96232C28.0197 11.8404 27.9999 15.7547 27.9999 15.7547C27.9999 15.7547 27.9999 19.6493 27.5057 21.5273C27.2289 22.5553 26.4184 23.3659 25.3904 23.6427C23.5123 24.1369 15.9999 24.1369 15.9999 24.1369C15.9999 24.1369 8.50739 24.1369 6.60954 23.6229C5.58154 23.3461 4.771 22.5356 4.49423 21.5076C4 19.6493 4 15.7349 4 15.7349C4 15.7349 4 11.8404 4.49423 9.96232C4.771 8.93432 5.60131 8.10401 6.60954 7.82724C8.48763 7.33301 15.9999 7.33301 15.9999 7.33301C15.9999 7.33301 23.5123 7.33301 25.3904 7.84701ZM19.855 15.598L13.6079 19.196V12L19.855 15.598Z" fill="#AFAFAF"/>
                            </svg>											
                        {{-- </a> --}}
                    </li>
                </ul>
                <div class="footer-info__feedback">
                    <a class="btn feedback-open" style="text-align: center;">
                        {{__('home.Вам перезвонить?')}}
                    </a>
                </div>
                <div class="footer-info__pay">
                    <img src="/img/uzcard.png" alt="pay">
                    <img src="/img/MasterCard.png" alt="pay">
                    <img src="/img/visa.png" alt="pay">
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bot">
        <div class="container">
            <div class="footer-bot__text">
                {{__('home.Интернет-магазины')}} +. {{__('home.Все права защищены')}}.
            </div>
            <a href="https://www.novastudio.uz/" class="footer__nova" target="_blank">
                <img src="/img/novas.svg" alt="NovaS">
            </a>
        </div>
    </div>
</footer>