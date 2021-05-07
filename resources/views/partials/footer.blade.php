<footer>
    <div class="footer_logo">
        <img src="{{ asset('img/logo.png') }}" alt="">
    </div>
    <div class="info_footer">
        <div class="pastificio">
            <h3>pastificio</h3>
            <ul>
                <li>Il pastificio</li>
                <li>Grano decorticato a pietra</li>
                <li>Il Molise c'e'</li>
                <li>Filiera integrata</li>
                <li>100 anni di pasta</li>
                <li>Sartoria della pasta</li>
                <li>Spaghetto Quadrato</li>
                <li>Le Persone</li>
            </ul>
        </div>
        <div class="prodotti">
            <h3>prodotti</h3>
            <ul>
                @foreach ($formati as $f)

                    @foreach ($f as $key => $ff)
                        <a href="{{ route('details_product', ['id' => $key]) }}"><li>{{ $ff['titolo'] }}</li></a>
                    @endforeach

                @endforeach
            </ul>
        </div>
    </div>
    <div class="info_footer">
        <div class="collezione_chef">
            <h3>collezione da chef</h3>
            <ul>
                <li>Collezione da Chef</li>
                <li>Grandi Cucine</li>
                <li>Biologiche</li>
                <li>Quadrate</li>
            </ul>
        </div>
        <h3 id='limited_edition' class="grey">limited edition</h3>
        <div class="news_footer">
            <h3 class="grey">news</h3>
            <ul style="text-transform: uppercase">
                <li><i class="fas fa-angle-double-right"></i>e-commerce</li>
                <li><i class="fas fa-angle-double-right"></i>b2b</li>
                <li><i class="fas fa-angle-double-right"></i>comunicazione</li>
                <li><i class="fas fa-angle-double-right"></i>scarica i cataloghi</li>
                <li><i class="fas fa-angle-double-right"></i>rassegna stampa</li>
                <li><i class="fas fa-angle-double-right"></i>video</li>
                <li><i class="fas fa-angle-double-right"></i>contatti</li>
                <li><i class="fas fa-angle-double-right"></i>lavora con noi</li>
                <li><i class="fas fa-angle-double-right"></i>certificazioni</li>
                <li><i class="fas fa-angle-double-right"></i>privacy policy</li>
            </ul>
        </div>
    </div>
    <div class="info_footer">
        <div class="info_azienda">
            <ul style="text-transform: uppercase; font-size: 12px">
                <li>
                    <strong>ragione sociale:</strong>
                    la molisana s.p.a
                </li>
                <li>
                    <strong>sede legale:</strong>
                    CONTRADA COLLE DELLE API, 100/A - 86100 - CAMPOBASSO (CB)
                </li>
                <li>
                    <strong>pec:</strong>
                    LAMOLISANA@PEC.IT
                </li>
                <li>
                    <strong>tel:</strong>
                    +39 0874 4981
                </li>
                <li>
                    <strong>fax:</strong>
                    +39 0874 629584
                </li>
                <li>
                    <p>per segnalazioni scrivere a:</p>
                    <a>INFO@LAMOLISANA.IT</a>
                    <p>per contattare l'area commerciale:</p>
                    <a>INFO@LAMOLISANA.IT</a>
                    <p>per contattare l'area commerciale:</p>
                    <a>INFO@LAMOLISANA.IT</a>
                    <p>dati aziendali:</p>
                    <a>leggi di piu'</a>
                </li>
            </ul>    
        </div>
        <div class="contatti_tel">
            <h4>Numero Verde</h4>
            <p>800.818081</p>
            <h4 style="margin-top: 5px;"><i class="fab fa-whatsapp"></i> Whatsapp</h4>
            <p>380.1292455</p>

        </div>
    </div>
</footer>