<h2 class="lh30 mt15 text-center">Form Rekam Medik <b class="text-primary">Baru</b></h2>
<p class="lead mb30 text-center"></p>

<div class="row">
    <div class="col-md-9 center-block">


        <!-- Form Wizard -->
        <div class="admin-form theme-primary">

            <div class="panel">

                <form method="post" action="/" id="admin-form">
                    <div class="panel-body">
                    
                        <div class="section-divider mb40 mt20"><span> Demografi Pasien </span></div><!-- .section-divider -->
                        
                        <!-- Nama Pasien -->
                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Nama Lengkap</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-6">
                                <label for="patient_name" class="field prepend-icon mt5">
                                    <input type="text" name="patient_name" id="patient_name" class="gui-input" placeholder="Nama Lengkap Pasien...">
                                    <label for="patient_name" class="field-icon"><i class="fa fa-user"></i></label>  
                                </label>
                            </div><!-- end section -->
                        </div>                            
                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Jenis Kelamin</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-6">
                                <div class="option-group field">
                                    <label for="female" class="option option-primary block">
                                        <input type="radio" name="patient_gender" id="female" value="female">
                                        <span class="radio"></span> Perempuan
                                    </label>                                    
                                    <label for="male" class="option block option-primary mt10">
                                        <input type="radio" name="patient_gender" id="male" value="male">
                                        <span class="radio"></span> Laki-laki                 
                                    </label>                                                                
                                </div>                                                                            
                            </div><!-- end section -->
                        </div><!-- end .section row section -->                                    
                    
                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Nama Lengkap Ibu Kandung</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-9">
                            <label for="patient_mother" class="field prepend-icon">
                                <input type="text" name="patient_mother" id="patient_mother" class="gui-input" placeholder="Nama Ibu Kandung">
                                <label for="patient_mother" class="field-icon"><i class="fa fa-envelope"></i></label>  
                            </label>
                            </div><!-- end section -->
                        </div><!-- end .section row section -->                                    

                        <div class="section row">                        
                           <div class="col-md-3">
                                <label class="control-label">Identitas</label>
                           </div><!-- end section -->                                                                                                     
                           <div class="col-md-9">
                                <div class="option-group field">
                                    <label for="patient_kktp" class="option option-primary">
                                        <input type="radio" name="patient_card" id="patient_kktp" value="ktp">
                                        <span class="radio"></span> KTP
                                    </label>                                    
                                    <label for="patient_ksim" class="option option-primary">
                                        <input type="radio" name="patient_card" id="patient_ksim" value="sim">
                                        <span class="radio"></span> SIM                 
                                    </label>                                                                
                                    <label for="pic_kpelajar" class="option option-primary">
                                        <input type="radio" name="patient_card" id="pic_kpelajar" value="kartu pelajar">
                                        <span class="radio"></span> Kartu Pelajar                 
                                    </label>                                                                
                                    <label for="pic_kpasspor" class="option option-primary">
                                        <input type="radio" name="patient_card" id="pic_kpasspor" value="passpor">
                                        <span class="radio"></span> Passpor                 
                                    </label>                                                                
                                    <label for="pic_klain" class="option option-primary">
                                        <input type="radio" name="patient_card" id="pic_klain" value="lain-lain">
                                        <span class="radio"></span> Lain-lain                 
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Nomor Identitas</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-6">
                                <label for="patient_noiden" class="field prepend-icon">
                                    <input type="tel" name="patient_noiden" id="patient_noiden" class="gui-input phone-group" placeholder="Nomor Identitas">
                                    <label for="patient_noiden" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kewarganegaraan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-3">
                            <label class="field select">
                                <select id="language" name="language">
                                    <option value="INA">Indonesia</option>
                                    <option value="EN">English</option>
                                    <option value="FR">French</option>
                                    <option value="SP">Spanish</option>
                                    <option value="CH">Chinese</option>
                                    <option value="JP">Japanese</option>
                                </select>
                                <i class="arrow double"></i>                    
                            </label>  
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end section --> 

                        <div class="section row">                        
                           <div class="col-md-3">
                                <label class="control-label">Status Perkawinan</label>
                           </div><!-- end section -->                                                                                                     
                           <div class="col-md-6">
                                <div class="option-group field">
                                    <label for="pic_belum_kawin" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_belum_kawin" value="belum menikah">
                                        <span class="radio"></span> Belum Menikah
                                    </label>                                    
                                    <label for="pic_kawin" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_kawin" value="menikah">
                                        <span class="radio"></span> Menikah                 
                                    </label>                                                                
                                    <label for="pic_tidak_kawin" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_tidak_kawin" value="tidak menikah">
                                        <span class="radio"></span> Tidak Menikah                 
                                    </label>                                                                
                                    <label for="pic_janda" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_janda" value="janda">
                                        <span class="radio"></span> Janda                 
                                    </label>                                                                
                                    <label for="pic_duda" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_duda" value="duda">
                                        <span class="radio"></span> Duda                 
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->

                        <div class="section row">                        
                           <div class="col-md-3">
                                <label class="control-label">Pendidikan Terakhir</label>
                           </div><!-- end section -->                                                                                                     
                           <div class="col-md-6">
                                <div class="option-group field">
                                    <label for="pic_edu_none" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_edu_none" value="NONE">
                                        <span class="radio"></span> None
                                    </label>                                    
                                    <label for="pic_edu_tk" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_edu_tk" value="TK">
                                        <span class="radio"></span> TK                 
                                    </label>                                                                
                                    <label for="pic_edu_sd" class="option option-primary">
                                        <input type="radio" name="pic_kawin" id="pic_edu_sd" value="SD">
                                        <span class="radio"></span> SD               
                                    </label>                                                                
                                    <label for="pic_edu_sltp" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_sltp" value="SLTP">
                                        <span class="radio"></span> SLTP                 
                                    </label>                                                                
                                    <label for="pic_edu_slta" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_slta" value="SLTA">
                                        <span class="radio"></span> SLTA               
                                    </label>                                                                
                                    <label for="pic_edu_d1d2" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_d1d2" value="D1/D2">
                                        <span class="radio"></span> D1/D2          
                                    </label>                                                                
                                    <label for="pic_edu_d3" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_d3" value="D3">
                                        <span class="radio"></span> D3                 
                                    </label>                                                                
                                    <label for="pic_edu_s1" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_s1" value="S1">
                                        <span class="radio"></span> S1                
                                    </label>                                                                
                                    <label for="pic_edu_s2" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_s2" value="S2">
                                        <span class="radio"></span> S2               
                                    </label>                                                                
                                    <label for="pic_edu_s3" class="option option-primary mt10">
                                        <input type="radio" name="pic_kawin" id="pic_edu_s3" value="S3">
                                        <span class="radio"></span> S3                
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->

                        <div class="section row">                        
                           <div class="col-md-3">
                                <label class="control-label">Agama</label>
                           </div><!-- end section -->                                                                                                     
                           <div class="col-md-6">
                                <div class="option-group field">
                                    <label for="pic_islam" class="option option-primary">
                                        <input type="radio" name="pic_agama" id="pic_islam" value="Islam">
                                        <span class="radio"></span> Islam
                                    </label>                                    
                                    <label for="pic_katholik" class="option option-primary">
                                        <input type="radio" name="pic_agama" id="pic_katholik" value="Katholik">
                                        <span class="radio"></span> Katholik                 
                                    </label>                                                                
                                    <label for="pic_kristen" class="option option-primary">
                                        <input type="radio" name="pic_agama" id="pic_kristen" value="Kristen">
                                        <span class="radio"></span> Kristen                
                                    </label>                                                                
                                    <label for="pic_hindu" class="option option-primary mt10">
                                        <input type="radio" name="pic_agama" id="pic_hindu" value="Hindu">
                                        <span class="radio"></span> Hindu                 
                                    </label>                                                                
                                    <label for="pic_buddha" class="option option-primary mt10">
                                        <input type="radio" name="pic_agama" id="pic_buddha" value="Buddha">
                                        <span class="radio"></span> Buddha                 
                                    </label>                                                                
                                    <label for="pic_kong" class="option option-primary mt10">
                                        <input type="radio" name="pic_agama" id="pic_kong" value="Kong Hu Chu">
                                        <span class="radio"></span> Kong Hu Chu                 
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->
                        <div class="section row">                        
                            <div class="col-md-3">
                                <label class="control-label">Pekerjaan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-9">
                                <div class="option-group field">
                                    <label for="pic_pns" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_pns" value="orang tua">
                                        <span class="radio"></span> PNS
                                    </label>                                    
                                    <label for="pic_polri" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_polri" value="suami">
                                        <span class="radio"></span> POLRI                 
                                    </label>                                                                
                                    <label for="pic_tni" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_tni" value="istri">
                                        <span class="radio"></span> TNI                 
                                    </label>                                                                
                                    <label for="pic_pelajar" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_pelajar" value="anak">
                                        <span class="radio"></span> Pelajar                 
                                    </label>                                                                
                                    <label for="pic_mahasiswa" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_mahasiswa" value="anak">
                                        <span class="radio"></span> Mahasiswa                 
                                    </label>                                                                
                                    <label for="pic_housewife" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_housewife" value="anak">
                                        <span class="radio"></span> Ibu Rumah Tangga                 
                                    </label>                                                                
                                    <label for="pic_pensiunan" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_pensiunan" value="anak">
                                        <span class="radio"></span> Pensiunan                
                                    </label>                                                                
                                    <label for="pic_swasta" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_swasta" value="anak">
                                        <span class="radio"></span> Swasta                
                                    </label>                                                                
                                    <label for="pic_wiraswasta" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_wiraswasta" value="anak">
                                        <span class="radio"></span> Wiraswasta                
                                    </label>                                                                
                                    <label for="pic_bumn" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_bumn" value="anak">
                                        <span class="radio"></span> BUMN/BUMD                
                                    </label>    
                                    <label for="pic_lain" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_lain" value="anak">
                                        <span class="radio"></span> Lain-lain                
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Jalan / Dusun</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-7">
                                <label for="pic_address" class="field prepend-icon">
                                    <input type="text" name="pic_address" id="pic_address" class="gui-input phone-group" placeholder="Alamat Tempat Tinggal">
                                    <label for="pic_address" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">RT</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rt" class="field prepend-icon">
                                    <input type="text" name="pic_rt" id="pic_rt" class="gui-input" placeholder="RT">
                                    <label for="pic_rt" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">RW</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kode Pos</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Propinsi</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kabupaten</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        


                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kecamatan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kelurahan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Handphone</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Telepon</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Email</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Alamat Lengkap Sesuai KTP</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-6">
                                <label for="patient_pic" class="field prepend-icon">
                                    <input type="tel" name="patient_pic" id="patient_pic" class="gui-input phone-group" placeholder="Nama Penanggung Jawab">
                                    <label for="patient_pic" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                                                
                    
                                            
                        <div class="section-divider mv40"><span> Penanggung Jawab  </span></div><!-- .section-divider -->                                         

                        <div class="section row">                        
                           <div class="col-md-3">
                                <label class="control-label">Penanggung Jawab</label>
                           </div><!-- end section -->                                                                                                     
                           <div class="col-md-6">
                                <div class="option-group field">
                                    <label for="pic_orangtua" class="option option-primary">
                                        <input type="radio" name="pic_type" id="pic_orangtua" value="orang tua">
                                        <span class="radio"></span> Orang Tua
                                    </label>                                    
                                    <label for="pic_suami" class="option option-primary">
                                        <input type="radio" name="pic_type" id="pic_suami" value="suami">
                                        <span class="radio"></span> Suami                 
                                    </label>                                                                
                                    <label for="pic_istri" class="option option-primary">
                                        <input type="radio" name="pic_type" id="pic_istri" value="istri">
                                        <span class="radio"></span> Istri                 
                                    </label>                                                                
                                    <label for="pic_anak" class="option option-primary">
                                        <input type="radio" name="pic_type" id="pic_anak" value="anak">
                                        <span class="radio"></span> Anak                 
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Nama</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-6">
                                <label for="patient_pic" class="field prepend-icon">
                                    <input type="tel" name="patient_pic" id="patient_pic" class="gui-input phone-group" placeholder="Nama Penanggung Jawab">
                                    <label for="patient_pic" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">                        
                            <div class="col-md-3">
                                <label class="control-label">Pekerjaan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-9">
                                <div class="option-group field">
                                    <label for="pic_pns" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_pns" value="orang tua">
                                        <span class="radio"></span> PNS
                                    </label>                                    
                                    <label for="pic_polri" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_polri" value="suami">
                                        <span class="radio"></span> POLRI                 
                                    </label>                                                                
                                    <label for="pic_tni" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_tni" value="istri">
                                        <span class="radio"></span> TNI                 
                                    </label>                                                                
                                    <label for="pic_pelajar" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_pelajar" value="anak">
                                        <span class="radio"></span> Pelajar                 
                                    </label>                                                                
                                    <label for="pic_mahasiswa" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_mahasiswa" value="anak">
                                        <span class="radio"></span> Mahasiswa                 
                                    </label>                                                                
                                    <label for="pic_housewife" class="option option-primary">
                                        <input type="radio" name="pic_occupation" id="pic_housewife" value="anak">
                                        <span class="radio"></span> Ibu Rumah Tangga                 
                                    </label>                                                                
                                    <label for="pic_pensiunan" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_pensiunan" value="anak">
                                        <span class="radio"></span> Pensiunan                
                                    </label>                                                                
                                    <label for="pic_swasta" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_swasta" value="anak">
                                        <span class="radio"></span> Swasta                
                                    </label>                                                                
                                    <label for="pic_wiraswasta" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_wiraswasta" value="anak">
                                        <span class="radio"></span> Wiraswasta                
                                    </label>                                                                
                                    <label for="pic_bumn" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_bumn" value="anak">
                                        <span class="radio"></span> BUMN/BUMD                
                                    </label>    
                                    <label for="pic_lain" class="option option-primary mt5">
                                        <input type="radio" name="pic_occupation" id="pic_lain" value="anak">
                                        <span class="radio"></span> Lain-lain                
                                    </label>                                                                
                                </div>                        
                            </div><!-- end section -->
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Jalan / Dusun</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-7">
                                <label for="pic_address" class="field prepend-icon">
                                    <input type="text" name="pic_address" id="pic_address" class="gui-input phone-group" placeholder="Alamat Tempat Tinggal">
                                    <label for="pic_address" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">RT</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rt" class="field prepend-icon">
                                    <input type="text" name="pic_rt" id="pic_rt" class="gui-input" placeholder="RT">
                                    <label for="pic_rt" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">RW</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kode Pos</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Propinsi</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kabupaten</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        


                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kecamatan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Kelurahan</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Handphone</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Telepon</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        

                        <div class="section row">
                            <div class="col-md-3">
                                <label class="control-label">Email</label>
                            </div><!-- end section -->                                                                                                     
                            <div class="col-md-2">
                                <label for="pic_rw" class="field prepend-icon">
                                    <input type="text" name="pic_rw" id="pic_rw" class="gui-input" placeholder="RW">
                                    <label for="pic_rw" class="field-icon"><i class="fa fa-mobile-phone"></i></label>  
                                </label>
                            </div><!-- end section -->                                                                                                     
                        </div><!-- end .section row section -->                        






                        <div class="section-divider mv40"><span>  Checkboxes + Radios Group </span></div><!-- .section-divider --> 
                        
                        <div class="section row">
                        
                            <div class="col-md-6 pad-r40 border-right">
                                <div class="option-group field">
                                    <label for="female" class="option option-primary block">
                                        <input type="radio" name="gender" id="female" value="female">
                                        <span class="radio"></span> Female specie
                                    </label>
                                    
                                    <label for="male" class="option block option-primary mt10">
                                        <input type="radio" name="gender" id="male" value="male">
                                        <span class="radio"></span> Male specie                  
                                    </label>                            
                                    
                                    <label for="other" class="option block option-primary mt10">
                                        <input type="radio" name="gender" id="other" value="other">
                                        <span class="radio"></span> Other specie                 
                                    </label>
                                    
                                </div>
                                                    
                            </div><!-- end .section section -->                                
        
                            
                            <div class="col-md-6 pl40">
                                <div class="option-group field">
                                
                                    <label class="option block option-primary">
                                        <input type="checkbox" name="languages" value="FR">
                                        <span class="checkbox"></span> Fluent french            
                                    </label>
                              
                                    <label class="option block option-primary mt10">
                                        <input type="checkbox" name="languages" value="EN">
                                        <span class="checkbox"></span> Fluent english              
                                    </label>
                                    
                                    <label class="option block option-primary mt10">
                                        <input type="checkbox" name="languages" value="CH">
                                        <span class="checkbox"></span> Fluent chinese            
                                    </label>                                
                                    
                                </div>                        
                            </div><!-- end section -->
                            
                        </div> <!-- end .section row section -->
                        
                        
                            <div class="section-divider mv40"><span> Custom Methods </span></div><!-- .section-divider -->
                        
                        <div class="section">
                            <div class="smart-widget sm-left sml-120">
                                <label for="verification" class="field prepend-icon">
                                    <input type="text" name="verification" id="verification" class="gui-input" placeholder="Solve verification">
                                    <label for="verification" class="field-icon"><i class="fa fa-shield"></i></label>  
                                </label>
                                <label for="verification" class="button">15 + 4 = </label>
                            </div><!-- end .smart-widget section --> 
                        </div><!-- end section -->
                        
                        
                            <div class="section-divider mv40"><span> Conditional validation </span></div><!-- .section-divider -->
                        
                        <div class="section">
                            <p class="small-text text-muted"> 1 - The applicant age must be 16 years and above </p>
                            <p class="small-text text-muted"> 2 - For applicants above 19 years, a licence number will be required </p>
                        </div><!-- end section -->                    
                        
                        <div class="section row">
                        
                            <div class="col-md-6">
                                <label for="applicant_age" class="field prepend-icon">
                                    <input type="text" name="applicant_age" id="applicant_age" class="gui-input" placeholder="Applicant age">
                                    <label for="applicant_age" class="field-icon"><i class="fa fa-male"></i></label>  
                                </label>
                            </div><!-- end section -->
                            
                            <div class="col-md-6">
                                <label for="licence_no" class="field prepend-icon">
                                    <input type="text" name="licence_no" id="licence_no" class="gui-input" placeholder="Licence number">
                                    <label for="licence_no" class="field-icon"><i class="fa fa-credit-card"></i></label>  
                                </label>
                            </div><!-- end section -->
                         
                        </div><!-- end .section row section -->
                        
                        <div class="spacer"></div>
                        
                        <div class="section">
                            <p class="small-text text-muted"> Child name will be required when you agree / tick / check that you are a parent </p>
                        </div><!-- end section -->                    
                        
                        
                        <div class="section">
                            <div class="option-group field">                            
                                <label class="option block">
                                    <input type="checkbox" name="parents" id="parents" value="parents">
                                    <span class="checkbox"></span> Yes i am a parent        
                                </label>                                
                            </div><!-- end .option-group section -->             
                        </div><!-- end section --> 
                                            
                        <div class="section">
                            <label for="child_name" class="field prepend-icon">
                                <input type="text" name="child_name" id="child_name" class="gui-input" placeholder="Enter childs name">
                                <label for="child_name" class="field-icon"><i class="fa fa-female"></i></label>  
                            </label>
                        </div><!-- end section -->                   
                        
                    </div><!-- end .form-body section -->
                    <div class="panel-footer text-right">
                        <button type="submit" class="button btn-primary"> Validate Form </button>
                        <button type="reset" class="button"> Cancel </button>
                    </div><!-- end .form-footer section -->
                </form>

            </div>

        </div>
        <!-- end: .admin-form -->

    </div>

</div>