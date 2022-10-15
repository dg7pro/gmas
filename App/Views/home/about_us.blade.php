@extends('layouts.app')

@section('title', 'About Us - गरीबी मिटाओ अभियान संगठन')

@section('style')
    <style>
        .blog-footer {
            padding: 2.5rem 0;
            color: #999;
            text-align: center;
            background-color: #f9f9f9;
            border-top: .05rem solid #e5e5e5;
        }
    </style>
@endsection

@section('content')
    <main role="main" class="container mb-5">
        <div class="row">
            <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    From the Garibi Mitao
                </h3>

                <div class="blog-post">
                    <h2 class="blog-post-title">संगठन व संस्थापक के बारे में</h2>
                    <p class="blog-post-meta">December 12, 2019 by <a href="#">Shyam Prasad</a></p>

                    <p>1947 में जब 42वें संविधान में संशोधन किया गया तो भारत को एक समाजवादी देश घोषित किया गया इसका मतलब ये हुआ कि भारत में रहने
                        वाले हर व्यक्ति का राष्ट्रीय सम्पत्ति पर समान अधिकार होना चाहिए।
                    </p>
                    <hr>
                    <p>गरीबी मिटाओ अभियान संगठन की स्थापना पूर्व सैनिक श्याम प्रसाद समाजसेवी द्वारा 2015 में की गयी। श्याम प्रसाद का जन्म भोजपुर जिला के
                        कड़ारी गांव में एक निर्धन व गरीब परिवार में हुयी। शिक्षा ग्रहण करने के बाद ये भारतीय सेना में भर्ती हो गये। सेना से सेवा निवृत होने के
                        बाद इन्होने एक तकनीकी प्रशिक्षण केन्द्र की स्थापना की जिसका उदद्ेश्य बेरोजगार छात्र-छात्राओं को तकनीकी शिक्षा के माध्यम से रोजगार
                        दिलाना है। इस संस्थान द्वारा हजारों छात्र-छात्रांए रोजगार प्राप्त कर चुके हैं एवं सस्थान आज भी सफलतापूर्वक चल रहा है। वर्ष 2014 में श्याम
                        प्रसाद की सोंच दुनिया के हर व्यक्ति से अलग हो गयी। इनकी सोंच हो गयी कि जिस प्रकार से हमारा परिवार है उसी प्रकार से देश का हर
                        नागरिक हमारा परिवार है और उस परिवार में जो लोग भी मूलभूत सुविधाओं से वंचित हैं उसे समाज के मुख्य धारा से जोड़ने के लिए कुछ सहयोगी
                        सदस्यों के सहयोग से गरीबी मिटाओ अभियान संगठन की स्थापना की गयी। श्याम प्रसाद का कहना है कि एक सैनिक का फर्ज सेना मे रहकर
                        देश की सुरक्षा करना होता है और सेना से आने के बाद समाज की सुरक्षा एवं सेवा करना होना चाहिए (सीमा से समाज की ओर)। 1947 में
                        जब 42वें संविधान में संशोधन किया गया तो भारत को एक समाजवादी देश घोषित किया गया इसका मतलब ये हुआ कि भारत में रहने वाले हर
                        व्यक्ति का राष्ट्रीय सम्पत्ति पर समान अधिकार होना चाहिए। देश के आजादी के 70 साल बीत जाने के बाद भी ये लागू नहीं हुआ। संगठन इसके
                        लिए लगातार प्रयासरत है। संगठन गरीबी, बेरोजगारी, भ्रष्टाचार, अशिक्षा जैसे मुदद्े पर व समाजसेवा का कार्य कर रहा है।
                    </p>


                    <p>संगठन का मुख्य उदद्ेश्य: </p>
                    <ol>
                        <li>भारतीय संविधान के मंशा के अनुसार सच्चे अर्थों में देश में समाजवादी व्यवस्था कायम कराने तथा देश के गरीबों को गरीबी से मुक्ति दिलाने हेतु कार्य करना।</li>
                        <li>भ्रष्टाचार के खिलाफ आम जनता को जागरुक करना तथा भ्रष्टाचारियों के खिलाफ कानूनी कार्यवाही हेतु पहल करना। </li>
                    </ol>

                </div><!-- /.blog-post -->






            </div><!-- /.blog-main -->

            <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About GMAS</h4>
                    <p class="text-muted mb-0"><em>आज देश की सबसे गम्भीर समस्या गरीबी व बेरोजगारी है। बेरोजगारों की फौज लगातार बढ़ती जा रही है। जब देश के सभी
                            लोगों को रोटी, कपड़ा, मकान, शिक्षा, स्वास्थ्य व मिलेगा तभी देश पूर्ण रुप से खुशहाल तथा विकासशील देश होगा। इसलिए अब देश में
                            अनिवार्य रोजगार नीति कानून बनना अतिआवश्यक हो गया है।</em></p>
                </div>

                {{--<div class="p-4">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                        <li><a href="#">March 2014</a></li>
                        <li><a href="#">February 2014</a></li>
                        <li><a href="#">January 2014</a></li>
                        <li><a href="#">December 2013</a></li>
                        <li><a href="#">November 2013</a></li>
                        <li><a href="#">October 2013</a></li>
                        <li><a href="#">September 2013</a></li>
                        <li><a href="#">August 2013</a></li>
                        <li><a href="#">July 2013</a></li>
                        <li><a href="#">June 2013</a></li>
                        <li><a href="#">May 2013</a></li>
                        <li><a href="#">April 2013</a></li>
                    </ol>
                </div>--}}

                <div class="p-4">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                        <li><a href="{{'https://www.facebook.com/gmasindia/'}}" class="text-primary"><em>Like on Facebook</em></a></li>
                        <li><img src="{{'/images/whatsapp.png'}}" width="15px" alt=""><em class="ml-2">+91 9102787075</em></li>
                        {{--<li><a href="#" class="text-info">Follow on Twitter</a></li>--}}
                    </ol>
                </div>
            </aside><!-- /.blog-sidebar -->

        </div><!-- /.row -->

    </main><!-- /.container -->

    {{-- <footer class="blog-footer">
         <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
         <p>
             <a href="#">Back to top</a>
         </p>
     </footer>--}}

@endsection