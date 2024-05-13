namespace Esercizio33
{
    partial class Form1
    {
        /// <summary>
        ///  Required designer variable.
        /// </summary>
        private System.ComponentModel.IContainer components = null;

        /// <summary>
        ///  Clean up any resources being used.
        /// </summary>
        /// <param name="disposing">true if managed resources should be disposed; otherwise, false.</param>
        protected override void Dispose(bool disposing)
        {
            if (disposing && (components != null))
            {
                components.Dispose();
            }
            base.Dispose(disposing);
        }

        #region Windows Form Designer generated code

        /// <summary>
        ///  Required method for Designer support - do not modify
        ///  the contents of this method with the code editor.
        /// </summary>
        private void InitializeComponent()
        {
            components = new System.ComponentModel.Container();
            labelTitolo = new Label();
            labelTemperatura = new Label();
            numericUpDownTemp = new NumericUpDown();
            numericUpDownTempo = new NumericUpDown();
            labelTempo = new Label();
            trackBarTemperatura = new TrackBar();
            trackBarTempo = new TrackBar();
            buttonAvvia = new Button();
            timer = new System.Windows.Forms.Timer(components);
            label1 = new Label();
            ((System.ComponentModel.ISupportInitialize)numericUpDownTemp).BeginInit();
            ((System.ComponentModel.ISupportInitialize)numericUpDownTempo).BeginInit();
            ((System.ComponentModel.ISupportInitialize)trackBarTemperatura).BeginInit();
            ((System.ComponentModel.ISupportInitialize)trackBarTempo).BeginInit();
            SuspendLayout();
            // 
            // labelTitolo
            // 
            labelTitolo.AutoSize = true;
            labelTitolo.Location = new Point(86, 24);
            labelTitolo.Name = "labelTitolo";
            labelTitolo.Size = new Size(41, 15);
            labelTitolo.TabIndex = 0;
            labelTitolo.Text = "Forno:";
            // 
            // labelTemperatura
            // 
            labelTemperatura.AutoSize = true;
            labelTemperatura.Location = new Point(63, 81);
            labelTemperatura.Name = "labelTemperatura";
            labelTemperatura.Size = new Size(76, 15);
            labelTemperatura.TabIndex = 1;
            labelTemperatura.Text = "Temperatura:";
            // 
            // numericUpDownTemp
            // 
            numericUpDownTemp.Location = new Point(145, 81);
            numericUpDownTemp.Maximum = new decimal(new int[] { 200, 0, 0, 0 });
            numericUpDownTemp.Minimum = new decimal(new int[] { 100, 0, 0, 0 });
            numericUpDownTemp.Name = "numericUpDownTemp";
            numericUpDownTemp.Size = new Size(120, 23);
            numericUpDownTemp.TabIndex = 2;
            numericUpDownTemp.Value = new decimal(new int[] { 100, 0, 0, 0 });
            numericUpDownTemp.ValueChanged += cambioValuta;
            // 
            // numericUpDownTempo
            // 
            numericUpDownTempo.Location = new Point(169, 203);
            numericUpDownTempo.Maximum = new decimal(new int[] { 60, 0, 0, 0 });
            numericUpDownTempo.Name = "numericUpDownTempo";
            numericUpDownTempo.Size = new Size(120, 23);
            numericUpDownTempo.TabIndex = 3;
            numericUpDownTempo.ValueChanged += cambioValuta;
            // 
            // labelTempo
            // 
            labelTempo.AutoSize = true;
            labelTempo.Location = new Point(63, 205);
            labelTempo.Name = "labelTempo";
            labelTempo.Size = new Size(100, 15);
            labelTempo.TabIndex = 4;
            labelTempo.Text = "Tempo di cottura:";
            // 
            // trackBarTemperatura
            // 
            trackBarTemperatura.Location = new Point(63, 135);
            trackBarTemperatura.Maximum = 200;
            trackBarTemperatura.Minimum = 100;
            trackBarTemperatura.Name = "trackBarTemperatura";
            trackBarTemperatura.Size = new Size(273, 45);
            trackBarTemperatura.TabIndex = 5;
            trackBarTemperatura.TickFrequency = 5;
            trackBarTemperatura.Value = 100;
            trackBarTemperatura.ValueChanged += cambioValuta;
            // 
            // trackBarTempo
            // 
            trackBarTempo.Location = new Point(63, 267);
            trackBarTempo.Maximum = 60;
            trackBarTempo.Name = "trackBarTempo";
            trackBarTempo.Size = new Size(273, 45);
            trackBarTempo.TabIndex = 6;
            trackBarTempo.Value = 1;
            trackBarTempo.ValueChanged += cambioValuta;
            // 
            // buttonAvvia
            // 
            buttonAvvia.Location = new Point(145, 352);
            buttonAvvia.Name = "buttonAvvia";
            buttonAvvia.Size = new Size(75, 23);
            buttonAvvia.TabIndex = 7;
            buttonAvvia.Text = "AVVIA";
            buttonAvvia.UseVisualStyleBackColor = true;
            buttonAvvia.Click += buttonAvvia_Click;
            // 
            // timer
            // 
            timer.Interval = 1000;
            timer.Tick += timer_Tick;
            // 
            // label1
            // 
            label1.AutoSize = true;
            label1.Location = new Point(175, 25);
            label1.Name = "label1";
            label1.Size = new Size(0, 15);
            label1.TabIndex = 8;
            // 
            // Form1
            // 
            AutoScaleDimensions = new SizeF(7F, 15F);
            AutoScaleMode = AutoScaleMode.Font;
            ClientSize = new Size(399, 450);
            Controls.Add(label1);
            Controls.Add(buttonAvvia);
            Controls.Add(trackBarTempo);
            Controls.Add(trackBarTemperatura);
            Controls.Add(labelTempo);
            Controls.Add(numericUpDownTempo);
            Controls.Add(numericUpDownTemp);
            Controls.Add(labelTemperatura);
            Controls.Add(labelTitolo);
            Name = "Form1";
            Text = "Form1";
            ((System.ComponentModel.ISupportInitialize)numericUpDownTemp).EndInit();
            ((System.ComponentModel.ISupportInitialize)numericUpDownTempo).EndInit();
            ((System.ComponentModel.ISupportInitialize)trackBarTemperatura).EndInit();
            ((System.ComponentModel.ISupportInitialize)trackBarTempo).EndInit();
            ResumeLayout(false);
            PerformLayout();
        }

        #endregion

        private Label labelTitolo;
        private Label labelTemperatura;
        private NumericUpDown numericUpDownTemp;
        private NumericUpDown numericUpDownTempo;
        private Label labelTempo;
        private TrackBar trackBarTemperatura;
        private TrackBar trackBarTempo;
        private Button buttonAvvia;
        private System.Windows.Forms.Timer timer;
        private Label label1;
    }
}