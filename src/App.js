import React, { useState } from 'react';
import { Heart, Stars, Calendar, Image, Music } from 'lucide-react';

const LoveWebsite = () => {
  const [showLetter, setShowLetter] = useState(false);
  
  return (
    <div className="min-h-screen bg-pink-50">
      {/* Hero Section */}
      <section className="h-screen flex items-center justify-center bg-gradient-to-b from-pink-200 to-pink-100 relative overflow-hidden">
        <div className="absolute inset-0 flex items-center justify-center opacity-10">
          <Heart className="w-96 h-96 text-pink-300 animate-pulse" />
        </div>
        <div className="text-center z-10 px-4">
          <h1 className="text-4xl md:text-6xl font-bold text-pink-600 mb-4">
          FRISKA NORAIDA, cis
          </h1>
          <p className="text-xl md:text-2xl text-gray-700 mb-8">
            Terima kasih telah menjadi bagian terindah dalam hidupku
          </p>
          <button 
            onClick={() => setShowLetter(true)}
            className="bg-pink-500 text-white px-8 py-3 rounded-full hover:bg-pink-600 transition-all transform hover:scale-105"
          >
            <Heart className="w-5 h-5 inline-block mr-2" />
            Buka Surat Cinta
          </button>
        </div>
      </section>

      {/* Memories Section */}
      <section className="py-20 px-4">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Kenangan Indah Kita
        </h2>
        <div className="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
          <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all">
            <div className="bg-pink-100 rounded-xl p-4 mb-4 flex justify-center">
              <Calendar className="w-12 h-12 text-pink-500" />
            </div>
            <h3 className="text-xl font-semibold mb-2 text-gray-800">First Date</h3>
            <p className="text-gray-600">Tak akan pernah kulupa hari pertama kita bertemu...</p>
          </div>
          <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all">
            <div className="bg-pink-100 rounded-xl p-4 mb-4 flex justify-center">
              <Stars className="w-12 h-12 text-pink-500" />
            </div>
            <h3 className="text-xl font-semibold mb-2 text-gray-800">Momen Spesial</h3>
            <p className="text-gray-600">Setiap detik bersamamu adalah momen yang berharga...</p>
          </div>
          <div className="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition-all">
            <div className="bg-pink-100 rounded-xl p-4 mb-4 flex justify-center">
              <Music className="w-12 h-12 text-pink-500" />
            </div>
            <h3 className="text-xl font-semibold mb-2 text-gray-800">Lagu Kita</h3>
            <p className="text-gray-600">Lagu yang selalu mengingatkanku padamu...</p>
          </div>
        </div>
      </section>

      {/* Gallery Section */}
      <section className="py-20 bg-white">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Galeri Foto Kita
        </h2>
        <div className="max-w-6xl mx-auto px-4 grid grid-cols-2 md:grid-cols-3 gap-4">
          {[1, 2, 3, 4, 5, 6].map((i) => (
            <div key={i} className="aspect-square bg-pink-100 rounded-lg overflow-hidden hover:opacity-75 transition-all">
              <div className="w-full h-full flex items-center justify-center">
                <Image className="w-12 h-12 text-pink-300" />
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Love Letter Modal */}
      {showLetter && (
        <div className="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center p-4 z-50">
          <div className="bg-white rounded-2xl p-8 max-w-lg w-full max-h-[80vh] overflow-y-auto relative">
            <button 
              onClick={() => setShowLetter(false)}
              className="absolute top-4 right-4 text-gray-500 hover:text-gray-700"
            >
              ✕
            </button>
            <h3 className="text-2xl font-bold text-pink-600 mb-4">Surat Cinta</h3>
            <p className="text-gray-700 leading-relaxed mb-4">
              Sayangku,<br/><br/>
              Setiap hari bersamamu adalah anugerah terindah dalam hidupku. 
              Senyummu adalah matahari yang menerangi hariku, tawamu adalah 
              melodi termerdu yang pernah kudengar.<br/><br/>
              Terima kasih telah menjadi inspirasiku, motivasiku, dan 
              alasanku untuk menjadi lebih baik setiap harinya. Bersamamu, 
              aku belajar arti cinta yang sesungguhnya.<br/><br/>
              I love you ❤️
            </p>
          </div>
        </div>
      )}

      {/* Footer */}
      <footer className="bg-pink-100 py-8">
        <div className="max-w-6xl mx-auto px-4 text-center">
          <p className="text-gray-600">Made by <Heart className="w-4 h-4 inline-block text-pink-500" /> akbras</p>
        </div>
      </footer>
    </div>
  );
};

export default LoveWebsite;
