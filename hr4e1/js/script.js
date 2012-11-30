/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
 function districtDropdown(ids){
     var region = ids.value;
     var str = "";
        str = "<select name='district' onChange='makeSchoolDropdown(this)'>";
        if(region == "Arusha"){
            str += "<option>Arusha</option><option>Arumeru</option><option>Karatu</option><option>Longido</option><option>Monduli</option><option>Ngorongoro</option>";
        }
        if(region == "Dar es salaam"){
            str += "<option>Ilala</option><option>Kinondoni</option><option>Temeke</option>";
        }
        if(region == "Dodoma"){
            str += "<option>Bahi</option><option>Dodoma</option><option>Kondoa</option><option>Kongwa</option><option>Mpwapwa</option><option>Chamwino</option>";
        }
        if(region == "Geita"){
            str += "<option>Bukombe</option><option>Chato</option><option>Geita</option><option>Mbongowe</option><option>Nyang'hwale</option>";
        }
        if(region == "Iringa"){
            str += "<option>Iringa Rulal</option><option>Iringa Urbun</option><option>Kilolo</option><option>Mufindi</option>";
        }
        if(region == "Kagera"){
            str += "<option>Biharamulo</option><option>Bukoba Urbun</option><option>Bukoba Rural</option><option>Karagwe</option><option>Misenyi</option><option>Muleba</option><option>Ngara</option>";
        }
        if(region == "Katavi"){
            str += "<option>Mpanda</option><option>Mlele</option>";
        }
        if(region == "Kigoma"){
            str += "<option>Kasulu</option><option>Kibondo</option><option>Kigoma Rulal</option><option>Kigoma Urban</option>";
        }
        if(region == "Kilimanjaro"){
            str += "<option>Hai</option><option>Moshi Rural</option><option>Moshi Urban</option><option>Mwanga</option><option>Rombo</option><option>Same</option><option>Siha</option>";
        }
         if(region == "Lindi"){
            str += "<option>Kilwa</option><option>Lindi Rural</option><option>Lindi Urban</option><option>Liwale</option><option>Nachingwea</option><option>Ruangwa</option>";
        }
         if(region == "Manyara"){
            str += "<option>Babati</option><option>Hanang</option><option>Kiteto</option><option>Mbulu</option><option>Simanjiro</option>";
        }
         if(region == "Mara"){
            str += "<option>Bundai</option><option>Musoma Rural</option><option>Musoma Urban</option><option>Serengeti</option><option>Tarime</option><option>Rolya</option>";
        }
         if(region == "Mbeya"){
            str += "<option>Chunya</option><option>Ileje</option><option>Kyela</option><option>Mbarali</option><option>Mbeya Rural</option><option>Mbeya Urban</option><option>Mbozi</option><option>Rungwe</option>";
        }
         if(region == "Morogoro"){
            str += "<option>Kilombero</option><option>Kilosa</option><option>Morogoro Rural</option><option>Morogoro Urban</option><option>Mvomero</option><option>Ulanga</option>";
        }
         if(region == "Mtwara"){
            str += "<option>Lulindi</option><option>Masasi</option><option>Mtwara Rural</option><option>Mtwara Urban</option><option>Nanyumbu</option><option>Newala</option><option>Tandahimba</option>";
        }
         if(region == "Mwanza"){
            str += "<option>Ilemela</option><option>Kwimba</option><option>Magu</option><option>Misungwi</option><option>Nyamagana</option><option>Sengerema</option><option>Ukerewe</option>";
        }
         if(region == "Njombe"){
            str += "<option>Ludewa</option><option>Makete</option><option>Njombe Rural</option><option>Njombe Urban</option><option>Wanging'ombe</option>";
        }
         if(region == "Pwani"){
            str += "<option>Bagamoyo</option><option>Kibaha</option><option>Kisarawe</option><option>Mafia</option><option>Mkuranga</option><option>Rufiji</option>";
        }
         if(region == "Rukwa"){
            str += "<option>Nkasi</option><option>Sumbawanga Rural</option><option>Sumbawanga Urban</option>";
        }
         if(region == "Ruvuma"){
            str += "<option>Mbinga</option><option>Songea Rural</option><option>Songea Urban</option><option>Tunduru</option><option>Namtumbo</option><option>Nyasa</option>";
        }
         if(region == "Shinyanga"){
            str += "<option>Kahama</option><option>Kishapu</option><option>Shinyanga Rural</option><option>Shinyanga Urban</option>";
        }
         if(region == "Simiyu"){
            str += "<option>Bariadi</option><option>Busega</option><option>Itilima</option><option>Maswa</option><option>Meatu</option>";
        }
         if(region == "Singida"){
            str += "<option>Iramba</option><option>Manyoni</option><option>Singida Rural</option><option>Singida Urban</option>";
        }
         if(region == "Tabora"){
            str += "<option>Igunga</option><option>Nzegal</option><option>Sikonge</option><option>Uyui</option><option>Tabora</option><option>Urambo</option>";
        }
         if(region == "Tanga"){
            str += "<option>Handeni</option><option>Kilindi</option><option>Korogwe</option><option>Lushoto</option><option>Muheza</option><option>Mkinga</option><option>Pangani</option><option>Tanga</option>";
        }
        str += "</select>";
        
        document.getElementById("district").innerHTML=str;
    }

function editdistrictDropdown(ids){
     var region = ids.value;
     var str = "";
        str = "<select name='district' onChange='editSchoolDropdown(this)'>";
        if(region == "Arusha"){
            str += "<option>Arusha</option><option>Arumeru</option><option>Karatu</option><option>Longido</option><option>Monduli</option><option>Ngorongoro</option>";
        }
        if(region == "Dar es salaam"){
            str += "<option>Ilala</option><option>Kinondoni</option><option>Temeke</option>";
        }
        if(region == "Dodoma"){
            str += "<option>Bahi</option><option>Dodoma</option><option>Kondoa</option><option>Kongwa</option><option>Mpwapwa</option><option>Chamwino</option>";
        }
        if(region == "Geita"){
            str += "<option>Bukombe</option><option>Chato</option><option>Geita</option><option>Mbongowe</option><option>Nyang'hwale</option>";
        }
        if(region == "Iringa"){
            str += "<option>Iringa Rulal</option><option>Iringa Urbun</option><option>Kilolo</option><option>Mufindi</option>";
        }
        if(region == "Kagera"){
            str += "<option>Biharamulo</option><option>Bukoba Urbun</option><option>Bukoba Rural</option><option>Karagwe</option><option>Misenyi</option><option>Muleba</option><option>Ngara</option>";
        }
        if(region == "Katavi"){
            str += "<option>Mpanda</option><option>Mlele</option>";
        }
        if(region == "Kigoma"){
            str += "<option>Kasulu</option><option>Kibondo</option><option>Kigoma Rulal</option><option>Kigoma Urban</option>";
        }
        if(region == "Kilimanjaro"){
            str += "<option>Hai</option><option>Moshi Rural</option><option>Moshi Urban</option><option>Mwanga</option><option>Rombo</option><option>Same</option><option>Siha</option>";
        }
         if(region == "Lindi"){
            str += "<option>Kilwa</option><option>Lindi Rural</option><option>Lindi Urban</option><option>Liwale</option><option>Nachingwea</option><option>Ruangwa</option>";
        }
         if(region == "Manyara"){
            str += "<option>Babati</option><option>Hanang</option><option>Kiteto</option><option>Mbulu</option><option>Simanjiro</option>";
        }
         if(region == "Mara"){
            str += "<option>Bundai</option><option>Musoma Rural</option><option>Musoma Urban</option><option>Serengeti</option><option>Tarime</option><option>Rolya</option>";
        }
         if(region == "Mbeya"){
            str += "<option>Chunya</option><option>Ileje</option><option>Kyela</option><option>Mbarali</option><option>Mbeya Rural</option><option>Mbeya Urban</option><option>Mbozi</option><option>Rungwe</option>";
        }
         if(region == "Morogoro"){
            str += "<option>Kilombero</option><option>Kilosa</option><option>Morogoro Rural</option><option>Morogoro Urban</option><option>Mvomero</option><option>Ulanga</option>";
        }
         if(region == "Mtwara"){
            str += "<option>Lulindi</option><option>Masasi</option><option>Mtwara Rural</option><option>Mtwara Urban</option><option>Nanyumbu</option><option>Newala</option><option>Tandahimba</option>";
        }
         if(region == "Mwanza"){
            str += "<option>Ilemela</option><option>Kwimba</option><option>Magu</option><option>Misungwi</option><option>Nyamagana</option><option>Sengerema</option><option>Ukerewe</option>";
        }
         if(region == "Njombe"){
            str += "<option>Ludewa</option><option>Makete</option><option>Njombe Rural</option><option>Njombe Urban</option><option>Wanging'ombe</option>";
        }
         if(region == "Pwani"){
            str += "<option>Bagamoyo</option><option>Kibaha</option><option>Kisarawe</option><option>Mafia</option><option>Mkuranga</option><option>Rufiji</option>";
        }
         if(region == "Rukwa"){
            str += "<option>Nkasi</option><option>Sumbawanga Rural</option><option>Sumbawanga Urban</option>";
        }
         if(region == "Ruvuma"){
            str += "<option>Mbinga</option><option>Songea Rural</option><option>Songea Urban</option><option>Tunduru</option><option>Namtumbo</option><option>Nyasa</option>";
        }
         if(region == "Shinyanga"){
            str += "<option>Kahama</option><option>Kishapu</option><option>Shinyanga Rural</option><option>Shinyanga Urban</option>";
        }
         if(region == "Simiyu"){
            str += "<option>Bariadi</option><option>Busega</option><option>Itilima</option><option>Maswa</option><option>Meatu</option>";
        }
         if(region == "Singida"){
            str += "<option>Iramba</option><option>Manyoni</option><option>Singida Rural</option><option>Singida Urban</option>";
        }
         if(region == "Tabora"){
            str += "<option>Igunga</option><option>Nzegal</option><option>Sikonge</option><option>Uyui</option><option>Tabora</option><option>Urambo</option>";
        }
         if(region == "Tanga"){
            str += "<option>Handeni</option><option>Kilindi</option><option>Korogwe</option><option>Lushoto</option><option>Muheza</option><option>Mkinga</option><option>Pangani</option><option>Tanga</option>";
        }
        str += "</select>";
        
        document.getElementById("district1").innerHTML=str;
    }

