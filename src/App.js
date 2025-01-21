import React, { useState, useEffect } from 'react';
import { Heart, Stars, Calendar, Image, Music, Gift, Quote, MessageCircle } from 'lucide-react';

const LoveWebsite = () => {
  const [showLetter, setShowLetter] = useState(false);
  const [daysCount, setDaysCount] = useState(0);

  
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

  // Calculate days together
  useEffect(() => {
    const startDate = new Date('2024-01-01'); // Replace with your actual start date
    const today = new Date();
    const diffTime = Math.abs(today - startDate);
    const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));
    setDaysCount(diffDays);
  }, []);

  // Quotes array
  const loveQuotes = [
    "Cinta adalah alasan terkuat untuk tetap bertahan.",
    "Bersamamu, setiap hari terasa seperti hari Valentine.",
    "Kamu adalah jawaban dari semua doaku.",
    "Cintaku padamu sebesar universe ini.",
    "Kamu adalah alasan aku tersenyum setiap hari."
  ];

  // Timeline events
  const timelineEvents = [
    {
      date: "1 January 2024",
      title: "Hari Pertama Kita",
      description: "Hari dimana kita pertama kali bertemu..."
    },
    {
      date: "14 February 2024",
      title: "Valentine Pertama",
      description: "Merayakan hari kasih sayang bersama..."
    },
    {
      date: "1 March 2024",
      title: "Monthly Anniversary",
      description: "Sudah sebulan kita bersama..."
    }
  ];

  // Songs playlist
  const playlist = [
    {
      title: "Perfect",
      artist: "Ed Sheeran",
      duration: "4:23"
    },
    {
      title: "All of Me",
      artist: "John Legend",
      duration: "4:29"
    },
    {
      title: "A Thousand Years",
      artist: "Christina Perri",
      duration: "4:45"
    }
  ];

  return (
    <div className="min-h-screen bg-pink-50">
      {/* Hero Section - Existing code remains the same */}
      <section className="h-screen flex items-center justify-center bg-gradient-to-b from-pink-200 to-pink-100 relative overflow-hidden">
        {/* ... existing hero section code ... */}
      </section>

      {/* Days Counter Section - New */}
      <section className="py-16 bg-white">
        <div className="max-w-4xl mx-auto text-center px-4">
          <h2 className="text-3xl font-bold text-pink-600 mb-8">
            Perjalanan Cinta Kita
          </h2>
          <div className="bg-pink-100 rounded-xl p-8">
            <p className="text-6xl font-bold text-pink-500 mb-4">{daysCount}</p>
            <p className="text-xl text-gray-700">Hari Bersama</p>
          </div>
        </div>
      </section>

      {/* Love Quotes Section - New */}
      <section className="py-20 px-4 bg-pink-50">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Quotes Cinta
        </h2>
        <div className="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6">
          {loveQuotes.map((quote, index) => (
            <div key={index} className="bg-white p-6 rounded-xl shadow-md">
              <Quote className="w-8 h-8 text-pink-400 mb-4" />
              <p className="text-gray-700 italic">{quote}</p>
            </div>
          ))}
        </div>
      </section>

      {/* Timeline Section - New */}
      <section className="py-20 bg-white px-4">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Timeline Cinta Kita
        </h2>
        <div className="max-w-4xl mx-auto">
          {timelineEvents.map((event, index) => (
            <div key={index} className="flex flex-col md:flex-row mb-8 relative">
              <div className="md:w-1/3 mb-4 md:mb-0">
                <div className="bg-pink-100 p-4 rounded-lg">
                  <p className="font-semibold text-pink-600">{event.date}</p>
                </div>
              </div>
              <div className="md:w-2/3 md:pl-8">
                <div className="bg-white p-6 rounded-xl shadow-md">
                  <h3 className="text-xl font-semibold mb-2">{event.title}</h3>
                  <p className="text-gray-600">{event.description}</p>
                </div>
              </div>
            </div>
          ))}
        </div>
      </section>

      {/* Music Player Section - New */}
      <section className="py-20 bg-pink-50 px-4">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Playlist Cinta Kita
        </h2>
        <div className="max-w-2xl mx-auto bg-white rounded-xl shadow-lg p-6">
          {playlist.map((song, index) => (
            <div 
              key={index}
              className="flex items-center justify-between p-4 border-b last:border-b-0"
            >
              <div className="flex items-center">
                <Music className="w-6 h-6 text-pink-500 mr-4" />
                <div>
                  <p className="font-semibold">{song.title}</p>
                  <p className="text-sm text-gray-500">{song.artist}</p>
                </div>
              </div>
              <span className="text-gray-500">{song.duration}</span>
            </div>
          ))}
        </div>
      </section>

      {/* Message Board Section - New */}
      <section className="py-20 bg-white px-4">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Pesan Untukmu
        </h2>
        <div className="max-w-4xl mx-auto">
          <div className="bg-pink-50 p-8 rounded-xl">
            <div className="flex items-start space-x-4 mb-6">
              <MessageCircle className="w-6 h-6 text-pink-500" />
              <div>
                <p className="text-gray-700 leading-relaxed">
                  Setiap hari bersamamu adalah anugerah yang tak terhingga.
                  Kamu adalah inspirasi dalam setiap langkahku.
                  Terima kasih telah menjadi yang terbaik dalam hidupku.
                </p>
                <p className="text-pink-500 mt-4">- Akbras</p>
              </div>
            </div>
          </div>
        </div>
      </section>

      {/* Wishes Section - New */}
      <section className="py-20 bg-pink-50 px-4">
        <h2 className="text-3xl font-bold text-center text-pink-600 mb-12">
          Harapan Kita
        </h2>
        <div className="max-w-6xl mx-auto grid md:grid-cols-3 gap-8">
          <div className="bg-white p-6 rounded-xl shadow-md text-center">
            <Gift className="w-12 h-12 text-pink-500 mx-auto mb-4" />
            <h3 className="text-xl font-semibold mb-2">Masa Depan</h3>
            <p className="text-gray-600">
              Membangun masa depan yang indah bersama, penuh cinta dan kebahagiaan.
            </p>
          </div>
          <div className="bg-white p-6 rounded-xl shadow-md text-center">
            <Heart className="w-12 h-12 text-pink-500 mx-auto mb-4" />
            <h3 className="text-xl font-semibold mb-2">Cinta</h3>
            <p className="text-gray-600">
              Cinta kita akan terus tumbuh dan berkembang setiap harinya.
            </p>
          </div>
          <div className="bg-white p-6 rounded-xl shadow-md text-center">
            <Stars className="w-12 h-12 text-pink-500 mx-auto mb-4" />
            <h3 className="text-xl font-semibold mb-2">Mimpi</h3>
            <p className="text-gray-600">
              Mewujudkan semua mimpi dan cita-cita kita bersama.
            </p>
          </div>
        </div>
      </section>

  

      {/* Footer - Enhanced */}
      <footer className="bg-pink-100 py-12">
        <div className="max-w-6xl mx-auto px-4 text-center">
          <Heart className="w-8 h-8 text-pink-500 mx-auto mb-4" />
          <p className="text-gray-600 mb-2">Made with love by akbar</p>
          <p className="text-sm text-gray-500">© 2024 Our Love Story</p>
        </div>
      </footer>
    </div>
  );
};

export default LoveWebsite;